import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// JavaScript untuk toggle password visibility
document.addEventListener("DOMContentLoaded", function () {
    // Mendapatkan elemen input password dan tombol icon mata
    const togglePassword = document.querySelectorAll(".toggle-password");
    togglePassword.forEach((button) => {
        button.addEventListener("click", function () {
            // Mendapatkan elemen input password terkait
            const input = this.previousElementSibling;
            const type = input.type === "password" ? "text" : "password";
            input.type = type;
            this.classList.toggle("fa-eye-slash");
        });
    });
});
