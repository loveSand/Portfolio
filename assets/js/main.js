document.addEventListener('DOMContentLoaded', function() {
    const filter = document.getElementById('category-filter');
    const projectCards = document.querySelectorAll('.project-car');

    filter.addEventListener('change', function() {
        const selected = this.value;
        projectCards.forEach(card => {
            if (selected === 'all' || card.getAttribute('data-category') === selected) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    });
});

document.querySelectorAll('a[href^="#"').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
            targetElement.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});