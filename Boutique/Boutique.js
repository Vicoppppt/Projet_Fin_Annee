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

var image = document.getElementsByClassName('thumbnail');
new simpleParallax(image, {
  scale: 2,
  delay: 2.6,
  transition: 'cubic-bezier(0,0,0,1)'
});