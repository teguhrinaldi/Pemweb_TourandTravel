<<<<<<< HEAD
import './bootstrap';

import Alpine from 'alpinejs';
=======
import "./bootstrap";

import Alpine from "alpinejs";
>>>>>>> c3a21b8794164a82fe0a5e73b55c782800b4f693

window.Alpine = Alpine;

Alpine.start();
<<<<<<< HEAD
=======

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
>>>>>>> c3a21b8794164a82fe0a5e73b55c782800b4f693
