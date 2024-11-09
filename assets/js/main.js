// smooth scrolling
import smoothScroll from'smooth-scroll';

smoothScroll.init({
    selector: '[data-smooth-scroll]',
    easing: 'easeInOutQuad',
    speed: 1000,
});

// project filtering
const projectCards = document.querySelectorAll('.project-card');
const categoryFilter = document.getElementsById('category-filter');

categoryFilter.addEventListener('change', (e) => {
    const selectedCategory = e.target.value;
    projectCards.forEach((card) => {
        if (selectedCategory === 'all' || card.dataset.category === selectedCategory) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
});

// contact form
import axios from 'axios';

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

    axios.post('contact-form.php', {
        name, 
        email,
        message,
    })
    .then((Response) => {
        console.log(Response.data);
    })
    .catch((error) => {
        console.log(error);
    });
});