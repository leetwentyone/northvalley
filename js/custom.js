/* Open Search in header */
jQuery(function($){
  jQuery(document).on('click','.toggle-search',function(e){
    e.stopPropagation();
    jQuery(".search").toggleClass("search-open");
    jQuery("body").toggleClass("search-activated");
  });
});

/* Close Search in header */
jQuery(function($){
  jQuery(document).on('click','.close-search',function(e){
    e.stopPropagation();
    jQuery(".search").removeClass("search-open");
    jQuery("body").removeClass("search-activated");
  });
});

/* Menu Toggle */
jQuery(function($){
  jQuery(document).on('click','.open-menu',function(e){
    e.stopPropagation();
    jQuery(".side-header").toggleClass("menu-open");
    jQuery("body").toggleClass("side-menu--opened");
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
    draggable: true,
  });
});

/* Slidre Navigation */
jQuery(function($){
  jQuery('.prev-slide').click(function(){
    jQuery('.slider ul').slick('slickPrev');
  });

  jQuery('.next-slide').click(function(){
    jQuery('.slider ul').slick('slickNext');
  });
});