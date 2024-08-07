jQuery(document).ready(function () {

  // Slick Slider, single slide automatic

  $(".front-page-slider").slick({
    autoplay: true,
    slidesToScroll: 1,
    infinite: true,
    prevArrow: false,
    nextArrow: false,
    autoplaySpeed: 5000,
    pauseOnHover: false,
  });

  // Masonry

  $(".project-grid").masonry({
    // options
    columnWidth: ".grid-sizer",
    gutter: ".gutter-sizer",
    itemSelector: ".project-grid-item",
    percentPosition: true,
  });
});

// Remove empty p tags

$('p:empty').remove();

// Open mobile menu 

$('.dropdown-item').click(function() {
  $('.sub-menu').toggleClass('active');
  $('.dropdown-arrow').toggleClass('rotate');
});


