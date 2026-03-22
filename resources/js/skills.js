document.addEventListener('DOMContentLoaded', () => {
  const skillForm = document.getElementById('skill-form');
  const skillInput = document.getElementById('skill-input');
  const skillError = document.getElementById('skill-error-msg');
  const skillsContainer = document.getElementById('skills-list-container');

  const getCsrfToken = () => document.querySelector('meta[name="csrf-token"]')?.content;

  if (skillForm) {
    skillForm.addEventListener('submit', async (e) => {
      e.preventDefault();
      skillError.innerText = "";
      const skillValue = skillInput.value.trim();

      try {
        const response = await fetch('/add-skill', {
          method: 'POST',
          headers: {
            'X-CSRF-TOKEN': getCsrfToken(),
            'Accept': 'application/json',
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({ skill: skillValue })
        });

        const data = await response.json();
        if (response.status === 422) {
          skillError.innerText = data.errors.skill[0];
        } 
        else if (data.status === false) {
          skillError.innerText = data.message;
        } 
        else if (data.status === true) {
          skillInput.value = ""; 
          window.fetchSkills();  
        }

      } catch (err) {
        skillError.innerText = "Connection error. Please try again.";
        console.error("Add Skill Error:", err);
      }
    });
  }

  if (skillsContainer) {
    window.fetchSkills();
  }
});

window.fetchSkills = async function() {
  try {
    const response = await fetch('/dashboard', {
      method: 'GET',
      headers: {
        'Accept': 'application/json',
        'X-Requested-With': 'XMLHttpRequest' 
      }
    });

    const data = await response.json();

    if (data.status && data.skills) {
      window.renderSkillsList(data.skills);
    }
  } catch (err) {
    console.error("Fetch Skills Error:", err);
  }
};

window.renderSkillsList = function(skills) {
  const skillsContainer = document.getElementById('skills-list-container');
  const skillCountBadge = document.getElementById('skill-count-badge');
  
  if (!skillsContainer || !skillCountBadge) return;

  skillCountBadge.innerText = skills.length;
  
  if (skills.length === 0) {
    skillsContainer.innerHTML = '<p class="text-gray-400 text-sm italic">No skills added yet.</p>';
    return;
  }
  
  skillsContainer.innerHTML = skills.map(skill => `
    <div id="skill-item-${skill.id}" class="group flex items-center gap-2 bg-white border border-gray-200 hover:border-brand-purple hover:shadow-sm pl-4 pr-1.5 py-1.5 rounded-full transition duration-200">
      <span class="text-sm font-medium text-gray-700 group-hover:text-brand-purple transition">${skill.skill_name}</span>
      <button type="button" onclick="deleteSingleSkill(${skill.id})" class="w-7 h-7 flex items-center justify-center rounded-full text-gray-400 hover:bg-red-50 hover:text-red-500 transition duration-200 cursor-pointer">
        <i class="fa-solid fa-xmark"></i>
      </button>
    </div>
  `).join('');
};

window.deleteSingleSkill = async function(id) {
  const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;
  
  try {
    const response = await fetch('/delete-skill', {
      method: 'DELETE', 
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': csrfToken,
        'Accept': 'application/json'
      },
      body: JSON.stringify({ id: id })
    });
    
    const data = await response.json();
    
    if (data.status) {
      window.fetchSkills();
    } else {
      alert(data.message);
    }
  } catch (err) {
    console.error("Delete Skill Error:", err);
  }
};

window.deleteAllSkills = async function() {


  const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;
  
  try {
    const response = await fetch('/delete-all-skills', {
      method: 'DELETE', 
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': csrfToken,
        'Accept': 'application/json'
      }
    });
    
    const data = await response.json();
    
    if (data.status) {
      window.fetchSkills(); 
    } else {
      alert(data.message);
    }
  } catch (err) {
    console.error("Delete All Skills Error:", err);
  }
};