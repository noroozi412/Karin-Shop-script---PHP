let navbar          = document.getElementById("navbar");
let navbarCollapse  = document.getElementById("navbarSupportedContent");
let bottomNav       = document.getElementById("navbar-bottom");

function myFunction(x) {
    if (x.matches) { 
      navbarCollapse.appendChild(bottomNav);
    } else {
    //   navbarCollapse.remove(bottomNav);
      navbar.appendChild(bottomNav);
    }
  }
  
  var x = window.matchMedia("(max-width: 992px)")
  myFunction(x) // Call listener function at run time
  x.addEventListener("change" , myFunction) // Attach listener function on state changes



$(document).ready(function() {
    $('.amazing-suggest-container').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout:5000,
        rtl: true,
        responsive: {
            0:{
                items: 1
            },
            450:{
                items: 2
            },
            992:{
                items: 3
            },

            1400: {
                items: 4
            },
            1600: {
                items: 5
            }
            
        }
    })


    $('.special-suggest-container').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout:5000,
        rtl: true,
        responsive: {
            0:{
                items: 1
            },
            450:{
                items:2
            },
            992: {
                items: 3
            },
            1200:{
                items: 4
            },
            1400:{
                items: 5
            },
            
        }
    })
});