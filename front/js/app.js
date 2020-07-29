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
  
  function carouselSliders(){
    var mainBannerCarousel = $('#main-banner-carousel');
    if (mainBannerCarousel.length){
      mainBannerCarousel.owlCarousel({
        dots: true,
        dotsEach: true,
        items: 1,
        loop: true,
        nav: false,
        autoplay: true,
        autoplayTimeout: 7000,
        autoplayHoverPause: true
      });
    }
  }
  
  function accordion(){
    var acc = document.getElementsByClassName("accord-btn");
    var i;
    for (i = 0; i < acc.length; i++){
      acc[i].addEventListener("click", function(){
        this.classList.toggle('active');
        var accordHolder = this.childNodes[3];
        if (accordHolder.style.maxHeight){
          accordHolder.style.maxHeight = null;
        } else {
          accordHolder.style.maxHeight = accordHolder.scrollHeight + "px";
        }
      });
    }
  }
  
  $(function () {
    objectFitImages();
    mMenu();
    openSearchField();
    stickyHeader();
    accordion();
    carouselSliders();
  });