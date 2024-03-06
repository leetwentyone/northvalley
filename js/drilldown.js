/* Drill Down Menu */
jQuery(function($){
    jQuery(document).on('click','.expand',function(event){
  
        let _title = $(this).parents('.dropdown').first().find('a').first().children().first().text().split('\n')[0];
        let e = $(this).parents('.dropdown').first();
  
        if (e.hasClass('dropdown') ) {
            let child = e.children('.dropdown-menu');
            if(child.length > 0){
                if (child.hasClass('menu-mobile-open') == false) {
                child.addClass('menu-mobile-open');
  
                if (_title.length > 0) {
                    child.children('.back-prev-menu').find('.back').html(_title);
                }
                return false;
                }
            }
        }
  
        if ($(this).parent().hasClass('back-prev-menu')) {
          $(this).parents('.dropdown-menu').first().removeClass('menu-mobile-open')
        }
    });
});