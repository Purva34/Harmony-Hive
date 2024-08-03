document.getElementById("openSignUp").addEventListener("click", function(){
    window.location.href="userLogin.html";
});

document.getElementById("homePage").addEventListener("click", function(){
    window.location.href="index.html";
});

let lastScrollTop = 0;
    const navbar = document.getElementById('navbar');

    window.addEventListener('scroll', function() {
      let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      if (scrollTop > lastScrollTop) {
        // Scroll down
        navbar.style.top = '-60px'; // Hide the navbar
      } else {
        // Scroll up
        navbar.style.top = '0'; // Show the navbar
      }
      lastScrollTop = scrollTop;
    });