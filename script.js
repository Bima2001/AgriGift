
function signup() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    
    localStorage.setItem("email", email);
    localStorage.setItem("password", password);

 
    window.location.href = "welcome.html";
}


function login() {
    var storedEmail = localStorage.getItem("email");
    var storedPassword = localStorage.getItem("password");

    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    
    if (email === storedEmail && password === storedPassword) {
      
        window.location.href = "welcome.html";
    } else {
        document.getElementById("error-message").textContent = "Invalid credentials. Please try again.";
    }
}
document.addEventListener("DOMContentLoaded", function () {
    const images = document.querySelectorAll('.image-slider img');
    let currentIndex = 0;

    setInterval(function () {
        images[currentIndex].classList.remove('active');
        currentIndex = (currentIndex + 1) % images.length;
        images[currentIndex].classList.add('active');
    }, 4000); 
});
