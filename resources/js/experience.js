document.addEventListener('DOMContentLoaded', () => {
    const expForm = document.getElementById('experience-form');
    const expListContainer = document.getElementById('experience-list');

    const getCsrfToken = () => document.querySelector('meta[name="csrf-token"]')?.content;

    if (expForm) {
        expForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            document.querySelectorAll('.err-msg').forEach(el => {
                el.innerText = '';
            });

            const formData = new FormData(e.target);
            const id = document.getElementById('exp_id').value;
            const url = id ? `/experience/edit/${id}` : '/experience/add';

            try {
                const response = await fetch(url, {
                    method: 'POST',
                    body: formData,
                    headers: { 
                        'X-CSRF-TOKEN': getCsrfToken(),
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                });

                const data = await response.json();

                if (response.status === 422) {
                    Object.keys(data.errors).forEach(key => {
                        const errSpan = document.getElementById(`err_${key}`);
                        if (errSpan) errSpan.innerText = data.errors[key][0];
                    });
                } else if (data.status === true) {
                    window.cancelExperienceForm();
                    window.loadExperiences();
                } else {
                    const titleErr = document.getElementById('err_title');
                    if (titleErr) titleErr.innerText = data.message || "Something went wrong.";
                }
            } catch (error) { 
                console.error(error); 
                const titleErr = document.getElementById('err_title');
                if (titleErr) titleErr.innerText = "An error occurred while saving.";
            }
        });
    }

    if (expListContainer) {
        window.loadExperiences();
    }
});

window.toggleEndDate = function(checkbox) {
    const endMonth = document.getElementById('exp_end_month');
    const endYear = document.getElementById('exp_end_year');
    if (checkbox && checkbox.checked) {
        endMonth.disabled = true;
        endYear.disabled = true;
        endMonth.value = "";
        endYear.value = "";
    } else {
        if (endMonth) endMonth.disabled = false;
        if (endYear) endYear.disabled = false;
    }
};

window.loadExperiences = async function() {
    try {
        const response = await fetch('/experience/all', {
            headers: {
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            }
        });
        const data = await response.json();
        
        if (data.status) {
            window.renderExperiences(data.experiences);
        }
    } catch (e) { 
        console.error(e); 
    }
};

window.renderExperiences = function(experiences) {
    const container = document.getElementById('experience-list');
    if (!container) return;

    if (experiences.length === 0) {
        container.innerHTML = `<p class="text-center text-gray-400">No experience added yet.</p>`;
        return;
    }

    container.innerHTML = experiences.map(exp => `
        <div class="flex flex-col sm:flex-row gap-4 group">
            <div class="w-12 h-12 rounded-xl bg-purple-50 border border-purple-100 flex items-center justify-center text-brand-purple shrink-0 mt-1 transition group-hover:bg-brand-purple group-hover:text-white">
                <i class="fa-solid fa-briefcase text-xl"></i>
            </div>
            <div class="flex-1">
                <h3 class="font-bold text-gray-900 text-lg">${exp.title}</h3>
                <p class="text-sm font-medium text-gray-700 mb-1">${exp.company} <span class="text-gray-400 font-normal ml-2">• ${exp.location}</span></p>
                <p class="text-xs text-gray-500 mb-3">
                    ${exp.start_month} ${exp.start_year} - ${exp.end_year ? exp.end_month + ' ' + exp.end_year : 'Present'}
                    ${!exp.end_year ? '<span class="bg-green-100 text-green-700 text-[10px] font-bold px-2 py-0.5 rounded uppercase tracking-wide ml-2">Current</span>' : ''}
                </p>
                <p class="text-sm text-gray-600">${exp.description}</p>
                <div class="flex gap-3 mt-4">
                    <button onclick="deleteExperience(${exp.id})" class="px-4 py-1.5 border border-gray-300 rounded text-xs font-medium hover:border-red-500 hover:text-red-500 transition cursor-pointer">Delete</button>
                    <button onclick="editExperience(${exp.id})" class="px-4 py-1.5 border border-gray-300 rounded text-xs font-medium hover:border-brand-purple hover:text-brand-purple transition cursor-pointer">Edit</button>
                </div>
            </div>
        </div>
        <div class="border-t border-gray-100 last:hidden mt-6"></div>
    `).join('');
};

window.toggleExperienceForm = function() {
    window.resetExpForm();
    document.getElementById("exp-form-title").innerText = "Add Experience";
    document.getElementById("experience-list").classList.add("hidden");
    document.getElementById("experience-form-container").classList.remove("hidden");
};

window.cancelExperienceForm = function() {
    document.getElementById("experience-form-container").classList.add("hidden");
    document.getElementById("experience-list").classList.remove("hidden");
    window.resetExpForm();
};

window.resetExpForm = function() {
    const form = document.getElementById('experience-form');
    if (form) form.reset();
    
    const idField = document.getElementById('exp_id');
    if (idField) idField.value = "";
    
    document.querySelectorAll('.err-msg').forEach(el => el.innerText = "");
    
    const currentCheckbox = document.getElementById('exp_current');
    if (currentCheckbox) {
        window.toggleEndDate(currentCheckbox);
    }
};

window.editExperience = async function(id) {
    window.resetExpForm();
    
    try {
        const response = await fetch(`/experience/show/${id}`, {
            headers: {
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            }
        });
        const data = await response.json();
        
        if (data.status) {
            const exp = data.experience;
            
            document.getElementById('exp_id').value = exp.id;
            document.getElementById('exp_title').value = exp.title;
            document.getElementById('exp_company').value = exp.company;
            document.getElementById('exp_jobType').value = exp.jobType;
            document.getElementById('exp_location').value = exp.location;
            document.getElementById('exp_start_month').value = exp.start_month;
            document.getElementById('exp_start_year').value = exp.start_year;
            document.getElementById('exp_description').value = exp.description;

            const isCurrent = !exp.end_year;
            const currentCheckbox = document.getElementById('exp_current');
            
            if (currentCheckbox) {
                currentCheckbox.checked = isCurrent;
                window.toggleEndDate(currentCheckbox);
            }
            
            if (!isCurrent) {
                document.getElementById('exp_end_month').value = exp.end_month;
                document.getElementById('exp_end_year').value = exp.end_year;
            }

            document.getElementById("exp-form-title").innerText = "Edit Experience";
            document.getElementById("experience-list").classList.add("hidden");
            document.getElementById("experience-form-container").classList.remove("hidden");
        }
    } catch (err) { 
        console.error(err); 
    }
};

window.deleteExperience = async function(id) {


    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;

    try {
        const response = await fetch('/experience/delete', {
            method: 'POST', 
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify({ id: id })
        });
        
        const result = await response.json();
        
        if (result.status) {
            window.loadExperiences();
        }
    } catch (err) { 
        console.error(err); 
    }
};