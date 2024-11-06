// a script for smooth scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute("href")).scrollIntoView({
            behaviour: "smooth"
        });
    });
});

// script for project filtering
const projectCards = document.querySelectorAll('.project-card');
const categoryFilter = document.getElementsById('category-filter');

categoryFilter.addEventListener('change', (e) => {
    const selectedCategory = e.target.value;
    projectCards.forEach((card) => {
        const selectedCategory = card.dataset.category;
        if (selectedCategory === 'all' || category === selectedCategory) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
});

// the form element
const contactForm = document.querySelector('form');
const nameInput = document.getElementById('name');
const emailInput = document.getElementById('email');
const messageInput = document.getElementById('message');

contactForm.addEventListener("submit", (e) => {
    e.preventDefault();

    // get the form element
    const name = nameInput.value.trim();
    const email = emailInput.value.trim();
    const message = messageInput.value.trim();

    // send the data to contact-form.php
    fetch(contact-form.php, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `name=${name}&email=${email}&message${message}`,
    })
    .then((Response) => Response.text())
    .then((message) => console.log(message))
    .catch((error) => console.log(error));
});