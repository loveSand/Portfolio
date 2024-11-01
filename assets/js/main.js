// a script for smooth scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute("href")).scrollIntoView({
            behaviour: "smooth"
        });
    });
});

// form validation script
const contactForm = document.querySelector("form");

contactForm.addEventListener("submit", function(event) {
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const message = document.getElementById("message").value.trim();

    if (!name || !emaill || !message) {
        event.preventDefault();
        alert("Please fill out all the fields.");
    } else if (!/^\S+@\S+\.\S+$/.test(email)) {
        event.preventDefault();
        alert("Please enter a valid email address.")
    }
});