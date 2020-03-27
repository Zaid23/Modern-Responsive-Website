$('.count').counterUp({
    delay:10,
    time:800
  })

  // Scroll-top button
  mybutton = document.getElementById("myBTN");

  //when the user scrolls down 20px from the top of the document, show thw button
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20){
      mybutton.style.display = "block";
    }
    else {
      mybutton.style.display = "none";
    }
  }

  // When the user clicks on the button scroll to the top of the element
  function topFunction() {
    document.body.scrollTop = 0; // for safari
    document.documentElement.scrollTop = 0;  // for chrome, Firefox, IE, and opera
  }