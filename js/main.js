import { getSunMoonIcon } from "./darkModeIcon.js";
import { toggleDarkMode } from "./toggleDarkMode.js";

let about_section = document.querySelector('#about');
let contact_section = document.querySelector('#contact');
let nav_bar_active_element = document.getElementsByClassName('active');
const about_section_y = about_section.getBoundingClientRect().top;
const contact_section_y = contact_section.getBoundingClientRect().top;

let current_section = 'index';

const removeOtherHighlights = (class_id) => {
    let active_highlight_array = Array.from(nav_bar_active_element).filter(element => element.id !== class_id); 
    active_highlight_array.forEach(element => {
        element.classList.remove('active');
    })
};

window.onload = () => {
    removeOtherHighlights('index_navbar');
    document.getElementById('index_navbar').classList.add('active');
    Array.from(document.getElementsByClassName("dark_mode_toggle")).forEach(function(element) {
        element.addEventListener("click", toggleDarkMode, false);
    })
    getSunMoonIcon();
}

window.onscroll = () =>{
    // Add check to see if page is on a different section and set the class to active in navbar

    if (window.scrollY < about_section_y && current_section != 'index'){
        removeOtherHighlights('index_navbar');
        current_section = 'index';
        document.getElementById('index_navbar').classList.add('active');
    }
    else if(window.scrollY < contact_section_y && current_section != 'about' && window.scrollY >= about_section_y){
        removeOtherHighlights('about_navbar');
        current_section = 'about';
        document.getElementById('about_navbar').classList.add('active')
    }
    else if((window.scrollY + window.innerHeight) >= document.body.scrollHeight  && current_section != 'contact'){
        removeOtherHighlights('contact_navbar');
        current_section = 'contact';
        document.getElementById('contact_navbar').classList.add('active');
    }

}
