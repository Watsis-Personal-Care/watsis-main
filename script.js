// Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body
function openNav() {
  document.querySelector(".sidenav").style.width = "250px";
  document.body.style.color = "rgba(0,0,0,0.4)";
}

// Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white
function closeNav() {
  document.querySelector(".sidenav").style.width = "0";
  document.body.style.color = "black";
}

// Set the animation for the side navigation menu icon
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

  // Show the back-to-top button when user scrolls down
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("back-to-top-btn").style.display = "block";
  } else {
        document.getElementById("back-to-top-btn").style.display = "none";
  }
}

// Function to scroll to the top of the page smoothly
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
}

// Function to scroll the homepage scroll container
function scrollSmooth(direction) {
  const scrollContainer = document.querySelector(".homepage-scroll-container");
  const step = 50; // Number of pixels to scroll per step
  const increment = direction === 'left' ? -step : step;
  scrollContainer.scrollLeft += increment;
}
