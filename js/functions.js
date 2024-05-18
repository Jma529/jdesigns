jQuery(document).ready(function () {

  // Slick Slider, single slide automatic

  $(".front-page-slider").slick({
    autoplay: true,
    slidesToScroll: 1,
    infinite: true,
    prevArrow: '<i class="fas fa-chevron-left"></i>',
    nextArrow: '<i class="fas fa-chevron-right"></i>',
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
