document.addEventListener('DOMContentLoaded', () => {
    const projectForm = document.getElementById('project-form');
    const projectsGrid = document.getElementById('projects-grid');

    const getCsrfToken = () => document.querySelector('meta[name="csrf-token"]')?.content;

    // 1. HANDLE FORM SUBMISSION (Add & Edit)
    if (projectForm) {
        projectForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            // Hide all previous error messages
            document.querySelectorAll('.error-msg').forEach(el => {
                el.classList.add('hidden');
                el.innerText = '';
            });

            const formData = new FormData(e.target);
            const id = formData.get('id');
            // Determine if we are adding or editing based on the hidden ID field
            const url = id ? `/projects/edit/${id}` : '/projects/add';

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

                // 2. HANDLE LARAVEL VALIDATION ERRORS (422)
                if (response.status === 422) {
                    Object.keys(data.errors).forEach(key => {
                        const errorEl = document.getElementById(`error-${key}`);
                        if (errorEl) {
                            errorEl.innerText = data.errors[key][0];
                            errorEl.classList.remove('hidden');
                        }
                    });
                } 
                // 3. HANDLE CUSTOM CONTROLLER ERRORS (e.g. "Project title already exists")
                else if (data.status === false) {
                    const titleErrorEl = document.getElementById('error-title');
                    if (titleErrorEl) {
                        titleErrorEl.innerText = data.message;
                        titleErrorEl.classList.remove('hidden');
                    } else {
                        alert(data.message);
                    }
                } 
                // 4. SUCCESS
                else if (data.status === true) {
                    window.cancelProjectForm();
                    window.fetchProjects();
                }
            } catch (error) { 
                console.error("Project Save Error:", error); 
                alert("An error occurred while saving the project.");
            }
        });
    }

    // Load projects initially if the grid exists on the page
    if (projectsGrid) {
        window.fetchProjects();
    }
});


// ---------------------------------------------------------
// WINDOW FUNCTIONS (Accessible to HTML onclick handlers)
// ---------------------------------------------------------

// FETCH ALL PROJECTS
window.fetchProjects = async function() {
    try {
        const response = await fetch('/projects/all', {
            headers: {
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            }
        });
        const data = await response.json();
        
        if (data.status) {
            window.renderProjects(data.projects);
        }
    } catch (e) { 
        console.error("Load Projects Failed", e); 
    }
};

// RENDER PROJECTS TO HTML
window.renderProjects = function(projects) {
    const grid = document.getElementById('projects-grid');
    if (!grid) return;

    if (projects.length === 0) {
        grid.innerHTML = '<p class="col-span-full text-center text-gray-400 py-10">No projects added yet.</p>';
        return;
    }

    grid.innerHTML = projects.map(p => `
        <div class="border border-gray-200 rounded-xl flex flex-col hover:border-brand-purple hover:shadow-md transition group overflow-hidden p-5 bg-white">
            <div class="flex justify-between items-start mb-2">
                <h3 class="font-bold text-gray-900 group-hover:text-brand-purple transition text-lg leading-tight">${p.title}</h3>
                <a href="${p.link}" target="_blank" class="text-gray-400 hover:text-brand-purple transition"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </div>
            <p class="text-sm text-gray-500 mb-4 line-clamp-2">${p.description}</p>
            <div class="flex flex-wrap gap-2 text-xs font-medium text-gray-600 flex-1">
                ${p.technologies.split(',').map(t => `<span class="bg-gray-100 px-2.5 py-1 rounded-md border border-gray-200">${t.trim()}</span>`).join('')}
            </div>
            <div class="flex gap-3 mt-6">
                <button onclick="deleteProject(${p.id})" class="flex-1 py-2 border border-gray-300 rounded text-sm font-medium hover:border-red-500 hover:text-red-500 transition cursor-pointer">Delete</button>
                <button onclick="editProjectTrigger(${p.id})" class="flex-1 py-2 bg-brand-purple text-white rounded text-sm font-medium hover:bg-brand-dark transition cursor-pointer">Edit</button>
            </div>
        </div>
    `).join('');
};

// OPEN ADD FORM
window.openAddForm = function() {
    window.resetProjectForm();
    document.getElementById('form-heading').innerText = "Add New Project";
    document.getElementById("projects-list").classList.add("hidden");
    document.getElementById("project-form-container").classList.remove("hidden");
};

// TRIGGER EDIT MODE
window.editProjectTrigger = async function(id) {
    window.resetProjectForm();
    
    try {
        const response = await fetch(`/projects/show/${id}`, {
            headers: {
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            }
        });
        const data = await response.json();
        
        if (data.status) {
            // Populate form fields
            document.getElementById('field-id').value = data.project.id;
            document.getElementById('field-title').value = data.project.title;
            // Note: Your DB column is 'link', but the form input is 'url'
            document.getElementById('field-url').value = data.project.link; 
            document.getElementById('field-description').value = data.project.description;
            document.getElementById('field-technologies').value = data.project.technologies;

            // Update UI
            document.getElementById('form-heading').innerText = "Edit Project";
            document.getElementById("projects-list").classList.add("hidden");
            document.getElementById("project-form-container").classList.remove("hidden");
        } else {
            alert(data.message);
        }
    } catch (e) { 
        alert("Failed to fetch project data"); 
    }
};

// CANCEL FORM / GO BACK TO LIST
window.cancelProjectForm = function() {
    document.getElementById("project-form-container").classList.add("hidden");
    document.getElementById("projects-list").classList.remove("hidden");
    window.resetProjectForm();
};

// RESET FORM FIELDS AND ERRORS
window.resetProjectForm = function() {
    const form = document.getElementById('project-form');
    if (form) form.reset();
    document.getElementById('field-id').value = '';
    
    document.querySelectorAll('.error-msg').forEach(el => { 
        el.classList.add('hidden'); 
        el.innerText = ''; 
    });
};

// DELETE PROJECT
window.deleteProject = async function(id) {


    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;

    try {
        // Notice: Using POST here because your route is Route::post('/projects/delete')
        const response = await fetch('/projects/delete', {
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
            window.fetchProjects();
        } else {
            alert(data.message);
        }
    } catch (e) { 
        console.error("Delete failed", e); 
    }
};