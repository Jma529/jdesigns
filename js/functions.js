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


// Isotope filter and url hash function

function getHashFilter() {
  var hash = location.hash;
  // get filter=filterName
  var matches = location.hash.match( /filter=([^&]+)/i );
  var hashFilter = matches && matches[1];
  return hashFilter && decodeURIComponent( hashFilter );
}

var $grid = $('.project-grid');

var $filters = $('.filters');
$filters.on( 'click', 'button', function() {
  var filterAttr = $( this ).attr('data-filter');
  // set filter in hash
  location.hash = 'filter=' + encodeURIComponent( filterAttr );
});

var isIsotopeInit = false;

function onHashchange() {
  var hashFilter = getHashFilter();
  if ( !hashFilter && isIsotopeInit ) {
    return;
  }
  isIsotopeInit = true;
  // filter isotope
  $grid.isotope({
    itemSelector: '.project-grid-item',
    filter: hashFilter,
    percentPosition: true,
    
    masonry: {
      columnWidth: ".grid-sizer",
      gutter: ".gutter-sizer",
    }
  });

  // set selected class on button
  if ( hashFilter ) {
    $filters.find('.is-checked').removeClass('is-checked');
    $filters.find('[data-filter="' + hashFilter + '"]').addClass('is-checked');
    
  }
  if (window.location.hash) {
    $('body').addClass('hashed');
}
}

$(window).on( 'hashchange', onHashchange );
// trigger event handler to init Isotope
onHashchange();

// if ($('body').hasClass(hashFilter)) {
//   $filters.addClass('show');
// }

// Remove empty p tags

$('p:empty').remove();

// Open mobile menu 

$('.main-menu-mobile .dropdown-arrow').click(function() {
  $('.sub-menu').toggleClass('active');
  $('.dropdown-arrow').toggleClass('rotate');
});

3


