document.addEventListener('DOMContentLoaded', function() {
    const toggleNavButton = document.querySelector('.toggle-nav');
    const nav = document.querySelector('nav');

    toggleNavButton.addEventListener('click', function() {
        nav.classList.toggle('active');
    });
});
