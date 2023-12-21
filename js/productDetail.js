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
