$(document).ready(function() {
  $('.carousel-marcas').slick({
    // Configuraciones del carrusel
    dots: true,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1
  });
});


function abrirAcce(){
  const acce = document.getElementById('accessibility');
  const box = document.getElementById('BoxAccesibility');

  acce.classList.toggle('moved');
  box.classList.toggle('hidden');
}