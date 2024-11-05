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
const categoryFilter = document.getElementsById('category-filter');
const projectGrid = document.getElementById('project-grid');
const projectCards = projectGrid.children;

categoryFilter.addEventListener('change', (e) => {
    const selectedCategory = e.target.value;
    for (const project of projectCards) {
        if (selectedCategory === 'all' || project.dataset.category === selectedCategory) {
            project.style.display = 'block';
        } else {
            project.style.display = 'none';
        }
    }
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