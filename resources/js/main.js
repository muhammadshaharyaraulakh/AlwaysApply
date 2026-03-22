   // Expose the function to the global window object
window.switchTab = function(sectionId, clickedButton) {
  const sections = document.querySelectorAll(".dashboard-section");
  sections.forEach((section) => {
    section.classList.add("hidden");
    section.classList.remove("block");
  });

  const targetSection = document.getElementById(sectionId);
  targetSection.classList.remove("hidden");
  targetSection.classList.add("block");

  const navButtons = document.querySelectorAll(".nav-btn");
  navButtons.forEach((btn) => {
    btn.classList.remove("bg-purple-50", "text-brand-purple");
    btn.classList.add("text-gray-600");
  });

  clickedButton.classList.remove("text-gray-600");
  clickedButton.classList.add("bg-purple-50", "text-brand-purple");
};