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


window.onload = function() {
    window.scrollTo(0, 0);
  }


  document.addEventListener("DOMContentLoaded", function() {
    var timer;
    var timer2;
    var bulle = document.getElementById("bulle");
    var loginBtn = document.getElementById("login-btn");
    var bulleCart = document.getElementById("bulleCart");
    var CartBtn = document.getElementById("search-btn");

    function showCart() {
      clearTimeout(timer2);
      bulleCart.classList.add("active");

    }

    function hideMenu() {
        timer = setTimeout(function() {
          bulle.classList.remove("active");
        }, 100); // Délai de 1 seconde (1000 millisecondes)
      }
  
      function showMenu() {
        clearTimeout(timer);
        bulle.classList.add("active");
      }

    function hideCart() {
      timer2 = setTimeout(function() {
        bulleCart.classList.remove("active");
      }, 100);
    }

    CartBtn.addEventListener('mouseleave', function() {
      hideCart();
    })

    CartBtn.addEventListener('mouseenter', function() {
      showCart();
    })

    loginBtn.addEventListener('mouseleave', function() {
        hideMenu();
    });
  
      bulle.addEventListener('mouseenter', function() {
        showMenu();
    });
});