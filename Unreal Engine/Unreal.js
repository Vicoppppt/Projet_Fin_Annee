/*=============== SHOW MENU ===============*/
const navMenu = document.getElementById('nav-menu'),
    navToggle = document.getElementById('nav-toggle'),
    navClose = document.getElementById('nav-close')

document.getElementById("shake").addEventListener("click", () => {
    var text = document.getElementById("Cadenas");

    navMenu.classList.add('show-menu');

    if (text.classList.contains("shake")) {
        return;
    }

    text.classList.add("shake");
    setTimeout(function () {
        text.classList.remove("shake");
    }, 500);

}
);




/* Menu show */
navToggle.addEventListener('click', () => {
    navMenu.classList.add('show-menu')
})

/* Menu hidden */
navClose.addEventListener('click', () => {
    navMenu.classList.remove('show-menu')
})

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
const login = document.getElementById('login'),
    loginBtn = document.getElementById('login-btn'),
    loginClose = document.getElementById('login-close')

/* Login show */
loginBtn.addEventListener('click', () => {
    login.classList.add('show-login')
})

/* Login hidden */
loginClose.addEventListener('click', () => {
    login.classList.remove('show-login')
})
