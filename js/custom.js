/* Open Search in header */
jQuery(function($){
  jQuery(document).on('click','.search-toggle',function(e){
    e.stopPropagation();
    jQuery(".search-container").toggleClass("search-active");
    jQuery("body").toggleClass("search-activated");
  });
});

/* Close Search in header */
jQuery(function($){
  jQuery(document).on('click','.close-search',function(e){
    e.stopPropagation();
    jQuery(".search-container").removeClass("search-active");
    jQuery("body").removeClass("search-activated");
  });
});

/* Add class to body when menu opened */
jQuery(function($){
  jQuery('.toggle-menu').on('click',function () {
    jQuery(".menu-reveal").toggleClass("opened");
    jQuery("body").toggleClass("menu-active");
  });
});

/* Close Menu */
jQuery(function($){
  jQuery('.close-menu').on('click',function () {
    jQuery(".menu-reveal").removeClass("opened");
    jQuery(".dropdown-menu").removeClass("menu-mobile-open");
    jQuery("body").removeClass("menu-active");
  });
});

/* Key Messages */
jQuery(function($){
  jQuery('.key-messages ul').slick({
    autoplay: true,
    autoplaySpeed: 8000,
    dots: false,
    arrows: false,
    speed: 900,
    slidesToShow: 4,
    slidesToScroll: 1,
    draggable: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
});

/* Slider */
jQuery(function($){
  jQuery('.slider ul').slick({
    autoplay: true,
    autoplaySpeed: 8000,
    dots: false,
    arrows: false,
    fade: true,
    speed: 900,
    slidesToShow: 1,
    slidesToScroll: 1,
  });
});

/* Slider Navigation */
jQuery(function($){
  jQuery('.prev-slide').click(function(){
    jQuery('.slider ul').slick('slickPrev');
  });

  jQuery('.next-slide').click(function(){
    jQuery('.slider ul').slick('slickNext');
  });
});

/* Gallery */
jQuery(function($){
  jQuery('.main').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.thumbnails'
  });
});

jQuery(function($){
  jQuery('.thumbnails').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.main',
    dots: false,
    arrows: true,
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
        }
      }
    ]
  });
});

/* Image Slider */
jQuery(function($){
  jQuery('.image-slider ul').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
  });
});

/* Accordion */
jQuery(function($){
  jQuery(".faq-item").find(".faq-heading").click(function() {
    jQuery(this).toggleClass("active-tab").find("span").toggleClass("icon-minus icon-plus");
    jQuery(this).next().toggleClass("open").slideToggle("fast")
  });
});