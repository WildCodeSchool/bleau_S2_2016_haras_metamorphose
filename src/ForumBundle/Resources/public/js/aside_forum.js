$(document).ready(function() {
    $(window).resize(function() {
        if ($(window).width() < 1000) {
            // $('.postListTitlePost').each(function(){
//     $(this).text($(this).text().substring(0,20)+"...");
// });

            if ($('.postListTitlePost').length > 20 ) {
// trims it to 17 charcters
                $(this).text($(this).text().substring(0,17));

// 17 charcters + .......
                $(this).append('.....');
            }
            $('header').css('padding-left', '0');
            $('.header-logo').css('margin-left', '0');
            $('.hide-on-med-and-down').css('margin-left', '0');
            $('.page-footer').css( 'margin-left', '0');
            $('.page-footer.container').css('margin-left', '0');
        }
        else {
            $('header').css('padding-left', '300px');
            $('.header-logo').css('margin-left', '72px');
            $('.hide-on-med-and-down').css('margin-left', '70px');
            $('.page-footer').css( 'margin-left', '300px');
            $('.page-footer.container').css('margin-left', '-152px');
        }
    });
});
