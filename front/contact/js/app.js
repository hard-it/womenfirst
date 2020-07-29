/**
 * open/close search field
 */
function openSearchField() {
  $('#search-btn').on('click', function (e) {
    e.preventDefault();
    $('.header__search-block').addClass('active');
  });
  $('.header__search-close').on('click', function (e) {
    e.preventDefault();
    $('.header__search-block').removeClass('active');
  });
  $('#m-search-btn').on('click', function (e) {
    e.preventDefault();
    $('.header__search-block').addClass('active');
  });
}
/**
 * open/close m-menu
 */


function mMenu() {
  $('.top-main__m-menu').on('click', function (e) {
    e.preventDefault();
    $('.header__m-menu').slideToggle('active');
  });
}

function stickyHeader() {
  if (window.matchMedia("(max-width: 767px)").matches) {
    $('.header__top-main-holder').height($('.header__top-main').outerHeight());
    $(window).scroll(function () {
      var $headerNav = $('.header__top-main');
      var $headerTop = $('.header__top-bar');
      var scroll = $(window).scrollTop();

      if (scroll > $headerTop.outerHeight()) {
        $headerNav.addClass('sticky');
        $('body').addClass('sticky');
      } else {
        $headerNav.removeClass('sticky');
        $('body').removeClass('sticky');
      }
    });
  } else {
    $('.header-nav__holder').height($('.header__nav').outerHeight());
    $(window).scroll(function () {
      var $headerNav = $('.header__nav');
      var $headerTop = $('.header__top');
      var scroll = $(window).scrollTop();

      if (scroll > $headerTop.outerHeight()) {
        $headerNav.addClass('sticky');
      } else {
        $headerNav.removeClass('sticky');
      }
    });
  }
}

$(function () {
  objectFitImages();
  mMenu();
  openSearchField();
  stickyHeader();
});