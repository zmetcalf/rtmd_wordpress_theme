// Initialize Foundation
$(document).foundation();

// Slick FTW - Home page slider
$(document).ready(function() {
  $('.home_slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: true
  });
});
