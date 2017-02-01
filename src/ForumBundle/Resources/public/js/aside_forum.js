$(document).ready(function() {

    // Modification taille header général et footer
    modifHeaderFooter ();

    $(window).on("load resize", function () {
        modifHeaderFooter ();

        if ($(window).width() < 1000) {
            if ($('.postListTitlePost').length > 20 ) {
                // Récupération des 17 premiers caractères
                $(this).text($(this).text().substring(0,17));
                // 17 caractères + .......
                $(this).append('.....');
            }

            // Modification taille header général et footer
            $('header').css('padding-left', '0');
            $('.header-logo').css('margin-left', '0');
            $('.hide-on-med-and-down').css('margin-left', '0');
            $('.page-footer').css( 'margin-left', '0');
            $('.page-footer.container').css('margin-left', '0');
        }
    });
});

function modifHeaderFooter () {
    $('header').css('padding-left', '300px');
    $('.header-logo').css('margin-left', '72px');
    $('.hide-on-med-and-down').css('margin-left', '70px');
    $('.page-footer').css( 'margin-left', '300px');
    $('.page-footer.container').css('margin-left', '-152px');
}