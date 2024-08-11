const toggleDarkMode = () => {
    const body = document.querySelector("body");
    if (!body.classList.contains("dark-mode")){
        body.classList.add("dark-mode");
    }
    else{
        body.classList.toggle("dark-mode");
    }
    getSunMoonIcon();
}
