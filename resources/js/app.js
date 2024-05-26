import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();




window.linkNotReady= function() {
    alert("The link to the course is not available at this time please try again at a later date.")
}

import { profileDropdown } from "./animations/profile-dropdown";
profileDropdown();

