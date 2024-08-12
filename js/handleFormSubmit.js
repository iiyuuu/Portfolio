document.getElementById('contact_form').addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent default form submission
    let formData = new FormData(this);

    fetch('src/contact.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .catch(error => console.error('Error:', error));
}); 
