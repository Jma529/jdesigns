jQuery(document).ready(function () {
  var mobile_menu_trigger = ".mobile-menu-trigger";
  mobile_menu = ".mobile-menu";

  // Callback function to OPEN the mobile menu
  function openMobileMenu() {
    $(mobile_menu_trigger).click(function () {
      $(mobile_menu).addClass("open");
    });
  }
  // Callback function to CLOSE the mobile menu
  function closeMobileMenu() {
    $(mobile_menu_trigger).click(function () {
      $(mobile_menu).removeClass("open");
    });
  }

  // Mobile menu show/hide on trigger click
  $(mobile_menu_trigger).on("click", function (e) {
    e.preventDefault();

    if ($(mobile_menu).hasClass("open") === false) {
      openMobileMenu();
    } else if ($(mobile_menu).hasClass("open") === true) {
      closeMobileMenu();
    }
  });
});
