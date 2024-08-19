function showSnackbar(message, success=true) {
    var snackbar = document.getElementById("snackbar");
        snackbar.innerHTML = message;
        snackbar.className = success ? "snackbar show" : "snackbar error";
        setTimeout(function(){ snackbar.className = snackbar.className.replace(success ? "show" : "error", ""); }, 3000); 
}



document.getElementById('contact_form').addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent default form submission
    let form_data = new FormData(this);

    fetch('src/contact.php', {
        method: 'POST',
        body: form_data
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');     
        }
        return response.json();
    })
    .then(data => {
        if(data.hasOwnProperty('message')) {
            if(data['message'] === 'message sent already'){
                showSnackbar(data.message, false);
            }
            else{
                showSnackbar(data.message);
            }
            
        } else {
            throw new Error('Invalid response format');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showSnackbar("Error occurred. Please try again", false);
    });
}); 


