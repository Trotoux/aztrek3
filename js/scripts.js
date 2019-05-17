$(document).ready(function () {

  // Menu responsive
  $('.main-nav').stellarNav({
    closeLabel: 'Fermer',
    position: 'left',
    breakpoint: 992,
  });
  
  
  // Carousel
  $('.owl-carousel').owlCarousel({
    items: 1,
    loop: true,
    nav: true,
    navText: ['<i class="fas fa-arrow-alt-circle-left"></i><span class="hidden-text">Précédent</span>', '<i class="fas fa-arrow-alt-circle-right"></i><span class="hidden-text">Suivant</span>']
  });

});