import "./bootstrap";

import Alpine from "alpinejs";
window.Alpine = Alpine;
Alpine.start();

import AOS from 'aos';
window.AOS = AOS;
window.AOS.init();

// Settings
document.addEventListener("alpine-data", (event) => {
    Alpine.store(event.detail.key, event.detail.value);
});

window.toastrToast = toastrToast;
window.swalToast = swalToast;
