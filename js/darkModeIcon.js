export function getSunMoonIcon() {
    //check if darkmode
    const button_element = document.querySelector("dark_mode_toggle");
    button_element.appendChild("i");
    console.log(button_element);
    if(document.querySelector("dark-mode-toggle").firstChild().classList.contains("dark-mode")){
        button_element.querySelector(".child").className = "fa-solid fa-sun";
    }
    else{
        button_element.querySelector(".child").className = "fa-solid fa-moon";
    }

}