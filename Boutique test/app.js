let listProductHTML = document.querySelector('.listProduct');
let listCartHTML = document.querySelector('.listCart');
var iconCart = document.getElementById('search-btn');
let body = document.querySelector('body');
let closeCart = document.querySelector('.close');
let products = [];
let cart = [];


iconCart.addEventListener('click', () => {
    body.classList.toggle('showCart');
})
closeCart.addEventListener('click', () => {
    body.classList.toggle('showCart');
})

