/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
  document.querySelector(".sidenav").style.width = "250px";
  document.body.style.color = "rgba(0,0,0,0.4)";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
  document.querySelector(".sidenav").style.width = "0";
  document.body.style.color = "black";
}

/* Set the animation for the side navigation menu icon */
function myFunction(x) {
  x.classList.toggle("change");
}

// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.querySelector(".topnav").style.padding = "30px 10px";
    document.querySelector(".logo").style.width= "175px";
  } else {
    document.querySelector(".topnav").style.padding = "90px 10px";
    document.querySelector(".logo").style.width= "375px";
  } 
}