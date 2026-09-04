let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

if (menu && navbar) {
    menu.onclick = () => {
        menu.classList.toggle('bx-x');
        navbar.classList.toggle('active');
    };
}

window.onscroll = () => {
    if (menu && navbar) {
        menu.classList.remove('bx-x');
        navbar.classList.remove('active');
    }
};

if (window.Typed && document.querySelector('.multiple-text')) {
    new Typed('.multiple-text', {
        strings: ['Web Designer', 'Creative Developer', 'Small Business Website Builder', 'Portfolio Designer'],
        typeSpeed: 80,
        backSpeed: 80,
        backDelay: 1200,
        loop: true,
    });
}

const themeToggle = document.querySelector('#theme-toggle');
const themeIcon = document.querySelector('#theme-icon');
const themeText = document.querySelector('#theme-text');

function setTheme(isDark) {
    document.body.classList.toggle('dark-theme', isDark);
    if (themeIcon && themeText) {
        themeIcon.textContent = isDark ? '☀️' : '🌙';
        themeText.textContent = isDark ? 'Light' : 'Dark';
    }
    if (themeToggle) {
        themeToggle.setAttribute('aria-label', isDark ? 'Switch to light mode' : 'Switch to dark mode');
    }
}

const savedTheme = localStorage.getItem('raissa-theme');
setTheme(savedTheme === 'dark');

if (themeToggle) {
    themeToggle.addEventListener('click', () => {
        const isDark = !document.body.classList.contains('dark-theme');
        setTheme(isDark);
        localStorage.setItem('raissa-theme', isDark ? 'dark' : 'light');
    });
}
