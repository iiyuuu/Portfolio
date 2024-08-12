export function getSunMoonIcon() {
    const child_element = document.getElementsByClassName("dark_mode_toggle")[0].firstElementChild
    if(document.querySelector("body").classList.contains("dark-mode")){
        child_element.className = "fa-solid fa-sun";
    }
    else{
        child_element.className = "fa-solid fa-moon";
    }

};