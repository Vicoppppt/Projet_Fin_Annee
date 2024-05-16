const navMenu = document.getElementById('nav-menu');
const navToggle = document.getElementById('nav-toggle');
const navClose = document.getElementById('nav-close');

/* Menu show */
navToggle.addEventListener('click', () => {
    navMenu.classList.add('show-menu');
});


/* Menu hidden */
navClose.addEventListener('click', () => {
    navMenu.classList.remove('show-menu');
});


/*=============== LOGIN ===============*/
const login = document.getElementById('login');
const loginBtn = document.getElementById('login-btn');
const loginClose = document.getElementById('login-close');

/* Login hidden */
loginClose.addEventListener('click', () => {
    login.classList.remove('show-login')
})