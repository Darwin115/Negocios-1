document.addEventListener("DOMContentLoaded", function() {
    const estrellas = document.querySelectorAll(".estrella-item");
    
    estrellas.forEach((estrella, index) => {
      estrella.addEventListener("mouseenter", function() {
        for (let i = 0; i <= index; i++) {
          estrellas[i].classList.add("active");
        }
        for (let i = index + 1; i < estrellas.length; i++) {
          estrellas[i].classList.remove("active");
        }
      });
      
      estrella.addEventListener("mouseleave", function() {
        estrellas.forEach((estrella, i) => {
          estrella.classList.remove("active");
        });
      });
    });
  });