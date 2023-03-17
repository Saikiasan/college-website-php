function reveal() {
    var rows = document.querySelectorAll(".animated-row");
    for (var i = 0; i < rows.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = rows[i].getBoundingClientRect().top;
      var elementVisible = 150;
      if (elementTop < windowHeight - elementVisible) {
        rows[i].classList.add("animated");
      } else {
        rows[i].classList.remove("animated");
      }
    }
  }

  window.addEventListener('scroll', reveal);

  reveal()