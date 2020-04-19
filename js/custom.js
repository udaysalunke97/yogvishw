jQuery(".banner-slider").slick({
  infinite: true,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 2000,
  pauseOnHover: false
});
jQuery('.testimonial-slider').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: false,
  dots: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
jQuery(window).scroll(function(){
  var sticky = jQuery('.sticky');
  var bannerHeight = jQuery('.hero-wrap').height();
      scroll = jQuery(window).scrollTop();

  if (scroll >= bannerHeight) sticky.addClass('fixed');
  else sticky.removeClass('fixed');
});
jQuery('.toggle-menu').click(function(){
  jQuery('.menu-header-container').toggleClass('is-open');
});