document.addEventListener('DOMContentLoaded', () => {
    const educationForm = document.getElementById('education-form');
    const educationTimeline = document.getElementById('education-timeline');

    const getCsrfToken = () => document.querySelector('meta[name="csrf-token"]')?.content;

    // 1. POPULATE YEARS ON LOAD
    // Only run this if the education form exists on the page
    if (document.getElementById('edu-start')) {
        window.populateYears();
    }

    // 2. HANDLE FORM SUBMISSION (Add & Edit)
    if (educationForm) {
        educationForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            // Hide all previous error messages
            document.querySelectorAll('.edu-error').forEach(el => {
                el.classList.add('hidden');
                el.innerText = '';
            });

            const formData = new FormData(e.target);
            const id = formData.get('id');
            // Determine if we are adding or editing
            const url = id ? `/education/edit/${id}` : '/education/add';

            try {
                const response = await fetch(url, {
                    method: 'POST',
                    body: formData,
                    headers: { 
                        'X-CSRF-TOKEN': getCsrfToken(),
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest' // Tells Laravel it's an AJAX request
                    }
                });

                const data = await response.json();

                // HANDLE LARAVEL VALIDATION ERRORS (422)
                if (response.status === 422) {
                    Object.keys(data.errors).forEach(key => {
                        // Your HTML uses id="error-edu-name", "error-edu-institute", etc.
                        const errorEl = document.getElementById(`error-edu-${key}`);
                        if (errorEl) {
                            errorEl.innerText = data.errors[key][0];
                            errorEl.classList.remove('hidden');
                        }
                    });
                } 
                // SUCCESS
                else if (data.status === true) {
                    window.cancelEducationForm();
                    window.fetchEducation();
                }
            } catch (error) { 
                console.error("Education Save Error:", error); 
                alert("An error occurred while saving the education record.");
            }
        });
    }

    // Load education records initially if the timeline exists
    if (educationTimeline) {
        window.fetchEducation();
    }
});


// ---------------------------------------------------------
// WINDOW FUNCTIONS (Accessible to HTML onclick handlers)
// ---------------------------------------------------------

// DYNAMICALLY GENERATE YEARS IN DROPDOWN
window.populateYears = function() {
    const startSelect = document.getElementById('edu-start');
    const endSelect = document.getElementById('edu-completed');
    
    // We use the current year plus 5 to account for future graduation dates
    const currentYear = new Date().getFullYear(); 

    for (let i = currentYear + 5; i >= 1990; i--) {
        const opt = `<option value="${i}">${i}</option>`;
        startSelect.insertAdjacentHTML('beforeend', opt);
        endSelect.insertAdjacentHTML('beforeend', opt);
    }
};

// FETCH ALL EDUCATION RECORDS
window.fetchEducation = async function() {
    try {
        const response = await fetch('/education/all', {
            headers: {
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            }
        });
        const data = await response.json();
        
        if (data.status) {
            window.renderEducation(data.education);
        }
    } catch (e) { 
        console.error("Load Education Failed", e); 
    }
};

// RENDER EDUCATION TO HTML
window.renderEducation = function(education) {
    const timeline = document.getElementById('education-timeline');
    if (!timeline) return;

    if (education.length === 0) {
        timeline.innerHTML = '<p class="text-gray-400 py-4 pl-6">No education records found.</p>';
        return;
    }

    timeline.innerHTML = education.map(edu => `
        <div class="relative pl-6 group">
            <div class="absolute -left-[9px] top-1 w-4 h-4 bg-white border-2 border-brand-purple rounded-full"></div>
            <h3 class="font-bold text-gray-900 text-lg">${edu.name}</h3>
            <p class="text-sm font-medium text-gray-700 mb-1">${edu.institute}</p>
            <p class="text-xs text-gray-500 mb-2">${edu.start} - ${edu.completed}</p>
            <p class="text-sm text-gray-600">${edu.description || ''}</p>
            <div class="flex gap-3 mt-4">
                <button onclick="deleteEducation(${edu.id})" class="px-4 py-1.5 border border-gray-300 rounded text-xs font-medium hover:border-red-500 hover:text-red-500 transition cursor-pointer">Delete</button>
                <button onclick="editEducationTrigger(${edu.id})" class="px-4 py-1.5 border border-gray-300 rounded text-xs font-medium hover:border-brand-purple hover:text-brand-purple transition cursor-pointer">Edit</button>
            </div>
        </div>
    `).join('');
};

// OPEN ADD FORM
window.openEducationAddForm = function() {
    window.resetEduForm();
    document.getElementById('edu-form-heading').innerText = "Add Education";
    document.getElementById("education-list").classList.add("hidden");
    document.getElementById("education-form-container").classList.remove("hidden");
};

// TRIGGER EDIT MODE
window.editEducationTrigger = async function(id) {
    window.resetEduForm();
    
    try {
        const response = await fetch(`/education/show/${id}`, {
            headers: {
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            }
        });
        const data = await response.json();
        
        if (data.status) {
            // Populate form fields
            document.getElementById('edu-field-id').value = data.education.id;
            document.getElementById('edu-name').value = data.education.name;
            document.getElementById('edu-institute').value = data.education.institute;
            document.getElementById('edu-start').value = data.education.start;
            document.getElementById('edu-completed').value = data.education.completed;
            document.getElementById('edu-description').value = data.education.description;

            // Update UI
            document.getElementById('edu-form-heading').innerText = "Edit Education";
            document.getElementById("education-list").classList.add("hidden");
            document.getElementById("education-form-container").classList.remove("hidden");
        }
    } catch (e) { 
        alert("Failed to fetch education data"); 
    }
};

// CANCEL FORM / GO BACK TO LIST
window.cancelEducationForm = function() {
    document.getElementById("education-form-container").classList.add("hidden");
    document.getElementById("education-list").classList.remove("hidden");
    window.resetEduForm();
};

// RESET FORM FIELDS AND ERRORS
window.resetEduForm = function() {
    const form = document.getElementById('education-form');
    if (form) form.reset();
    
    const idField = document.getElementById('edu-field-id');
    if (idField) idField.value = '';
    
    document.querySelectorAll('.edu-error').forEach(el => { 
        el.classList.add('hidden'); 
        el.innerText = ''; 
    });
};

// DELETE EDUCATION
window.deleteEducation = async function(id) {


    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;

    try {
        const response = await fetch('/education/delete', {
            method: 'POST',
            headers: { 
                'Content-Type': 'application/json', 
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify({ id: id })
        });
        
        const data = await response.json();
        
        if (data.status) {
            window.fetchEducation();
        }
    } catch (e) { 
        console.error("Delete failed", e); 
    }
};