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



/*=============== SEARCH ===============*/
const search = document.getElementById('search'),
    searchBtn = document.getElementById('search-btn'),
    searchClose = document.getElementById('search-close')

/* Search show */
searchBtn.addEventListener('click', () => {
    search.classList.add('show-search')
})

/* Search hidden */
searchClose.addEventListener('click', () => {
    search.classList.remove('show-search')
})

/*=============== LOGIN ===============*/
const login = document.getElementById('login');
const loginBtn = document.getElementById('login-btn');
const loginClose = document.getElementById('login-close');

/* Login hidden */
loginClose.addEventListener('click', () => {
    login.classList.remove('show-login')
})