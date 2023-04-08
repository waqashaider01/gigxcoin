'use strict';



/**
 * navbar toggle
 */

const navbar = document.querySelector("[data-navbar]");
const navbarLinks = document.querySelectorAll("[data-nav-link]");
const menuToggleBtn = document.querySelector("[data-menu-toggle-btn]");

menuToggleBtn.addEventListener("click", function () {
  navbar.classList.toggle("active");
  this.classList.toggle("active");
});

for (let i = 0; i < navbarLinks.length; i++) {
  navbarLinks[i].addEventListener("click", function () {
    navbar.classList.toggle("active");
    menuToggleBtn.classList.toggle("active");
  });
}



/**
 * header sticky & back to top
 */

const header = document.querySelector("[data-header]");
const backTopBtn = document.querySelector("[data-back-top-btn]");

window.addEventListener("scroll", function () {
  if (window.scrollY >= 100) {
    header.classList.add("active");
    backTopBtn.classList.add("active");
  } else {
    header.classList.remove("active");
    backTopBtn.classList.remove("active");
  }
});



/**
 * search box toggle
 */

const searchBtn = document.querySelector("[data-search-btn]");
const searchContainer = document.querySelector("[data-search-container]");
const searchSubmitBtn = document.querySelector("[data-search-submit-btn]");
const searchCloseBtn = document.querySelector("[data-search-close-btn]");

const searchBoxElems = [searchBtn, searchSubmitBtn, searchCloseBtn];

for (let i = 0; i < searchBoxElems.length; i++) {
  searchBoxElems[i].addEventListener("click", function () {
    searchContainer.classList.toggle("active");
    document.body.classList.toggle("active");
  });
}



/**
 * move cycle on scroll
 */

const deliveryBoy = document.querySelector("[data-delivery-boy]");

let deliveryBoyMove = -80;
let lastScrollPos = 0;

window.addEventListener("scroll", function () {

  let deliveryBoyTopPos = deliveryBoy.getBoundingClientRect().top;

  if (deliveryBoyTopPos < 500 && deliveryBoyTopPos > -250) {
    let activeScrollPos = window.scrollY;

    if (lastScrollPos < activeScrollPos) {
      deliveryBoyMove += 1;
    } else {
      deliveryBoyMove -= 1;
    }

    lastScrollPos = activeScrollPos;
    deliveryBoy.style.transform = `translateX(${deliveryBoyMove}px)`;
  }

});

// Slider Script Start 


 
  var count = 0;
  var inc = 0;
  margin = 0;
  var slider = document.getElementsByClassName("slider-width")[0];
  var itemDisplay = 0;
  if (screen.width > 990) {
    itemDisplay = document.getElementsByClassName("slider-container")[0].getAttribute("item-display-d");
    margin = itemDisplay * 5;
  }
  if (screen.width > 700 && screen.width < 990) {
    itemDisplay = document.getElementsByClassName("slider-container")[0].getAttribute("item-display-t");
    margin = itemDisplay * 6.8;
  }
  if (screen.width > 280 && screen.width < 700) {
    itemDisplay = document.getElementsByClassName("slider-container")[0].getAttribute("item-display-m");
    margin = itemDisplay * 20;
  }


  var items = document.getElementsByClassName("item");
  var itemleft = items.length % itemDisplay;
  var itemslide = Math.floor(items.length / itemDisplay) - 1;
  for (let i = 0; i < items.length; i++) {
    items[i].style.width = (screen.width / itemDisplay) - margin + "px";
  }

  function next() {
    if (inc !== itemslide + itemleft) {
      if (inc == itemslide) {
        inc = inc + itemleft;
        count = count - (screen.width / itemDisplay) * itemleft;
      }
      else {
        inc++;
        count = count - screen.width;
      }
    }
    slider.style.left = count + "px";
  }

  function prev() {
    if (inc !== 0) {
      if (inc == itemleft) {
        inc = inc - itemleft;
        count = count + (screen.width / itemDisplay) * itemleft;
      }
      else {
        inc--;
        count = count + screen.width;
      }
    }
    console.log(inc)
    slider.style.left = count + "px";
  }
 
