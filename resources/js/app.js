import "./bootstrap";
import 'flowbite';
import flatpickr from "flatpickr";
import "flatpickr/dist/flatpickr.min.css";

// Initialize Flowbite
document.addEventListener('DOMContentLoaded', function() {
    // Initialize any Flowbite components
    const dropdowns = document.querySelectorAll('[data-dropdown-toggle]');
    dropdowns.forEach(dropdown => {
        new Dropdown(dropdown);
    });

    // Initialize flatpickr
    const dateInputs = document.querySelectorAll('input[type="date"]');
    dateInputs.forEach(input => {
        flatpickr(input, {
            dateFormat: "Y-m-d",
            allowInput: true
        });
    });
});
