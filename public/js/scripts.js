// JavaScript to handle header visibility and active state menu
let lastScrollTop = 0;
const navbar = document.querySelector('header');

window.addEventListener('scroll', () => {
    let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

    if (currentScroll > lastScrollTop) {
        // Scroll down
        navbar.classList.add('scrolled-up');
    } else {
        // Scroll up
        navbar.classList.remove('scrolled-up');
    }
    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // For Mobile or negative scrolling
});

// Add an 'active' class to the current menu item based on the visited page
const currentLocation = window.location.href;
const menuItems = document.querySelectorAll('.navbar-menu li a');

menuItems.forEach(item => {
    if (currentLocation.includes(item.getAttribute('href'))) {
        item.classList.add('active');
    }
});