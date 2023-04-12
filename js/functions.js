jQuery(document).ready(function () {
  var mobile_menu_trigger = ".hamburger";
  var mobile_menu = ".mobile-menu";

  // Callback function to OPEN the mobile menu

  $(mobile_menu_trigger).click(function () {
    $(mobile_menu).toggleClass("slide-right");
    console.log("I am checked!");
  });
  // function openMobileMenu() {
  //   $(mobile_menu_trigger).click(function () {
  //     $(mobile_menu).addClass("open");
  //   });
  // }
  // // Callback function to CLOSE the mobile menu
  // function closeMobileMenu() {
  //   $(mobile_menu_trigger).click(function () {
  //     $(mobile_menu).removeClass("open");
  //   });
  // }

  // // Mobile menu show/hide on trigger click
  // $(mobile_menu_trigger).trigger("click", function (e) {
  //   e.preventDefault();

  //   if ($(mobile_menu).hasClass("open") === false) {
  //     openMobileMenu();
  //   } else if ($(mobile_menu).hasClass("open") === true) {
  //     closeMobileMenu();
  //   }
  // });

  // Slick Slider, single slide automatic

  $(".front-page-slider").slick({
    autoplay: true,
    slidesToScroll: 1,
    arrows: false,
    infinite: true,
  });
});
