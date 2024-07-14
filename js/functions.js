jQuery(document).ready(function () {

  // Slick Slider, single slide automatic

  $(".front-page-slider").slick({
    autoplay: false,
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
    filter: hashFilter
  });

  // set selected class on button
  if ( hashFilter ) {
    $filters.find('.is-checked').removeClass('is-checked');
    $filters.find('[data-filter="' + hashFilter + '"]').addClass('is-checked');
  }
}

$(window).on( 'hashchange', onHashchange );
// trigger event handler to init Isotope
onHashchange();

// Remove empty p tags

$('p:empty').remove();

// Open mobile menu 

$('.main-menu-mobile .dropdown-arrow').click(function() {
  $('.sub-menu').toggleClass('active');
  $('.dropdown-arrow').toggleClass('rotate');
  console.log('I work!');
});

