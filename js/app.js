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


  /*
   * Small hack to fix off canvas menu to put top level link on next row
   *
   */

  // Grab all elements with UL as child
  var sub_ul = $('ul.off-canvas-list').children('li').find('ul');

  $.each(sub_ul, function(index, value) {
    var parent_link = '<li>' + $(value).siblings('a').prop('outerHTML') + '</li>';
    $(parent_link).insertAfter($(value).children('li:first'));
  });
});
