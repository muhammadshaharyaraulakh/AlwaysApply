import './bootstrap';
import './main.js';
document.addEventListener("DOMContentLoaded", () => {

    const btn = document.getElementById("mobile-menu-btn");
    const menu = document.getElementById("mobile-menu");

    btn.addEventListener("click", () => {

        menu.classList.toggle("hidden");
        menu.classList.toggle("flex");

        menu.classList.toggle("scale-y-0");
        menu.classList.toggle("opacity-0");

        menu.classList.toggle("scale-y-100");
        menu.classList.toggle("opacity-100");

    });
    
       const passwordInput = document.getElementById("passwordInputLogin");
const togglePasswordBtn = document.getElementById("togglePasswordBtnLogin"); 

togglePasswordBtn.addEventListener("click", () => {
    const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
    passwordInput.setAttribute("type", type);
    togglePasswordBtn.textContent = type === "password" ? "Show" : "Hide";
});

    

});

