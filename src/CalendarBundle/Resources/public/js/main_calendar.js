// ********************************************************************
// *                       Appel Fonction
// ********************************************************************
jQuery(document).ready(function($) {

    init_plateforme();

    // RETOUR VERS LE HAUT
    // retour_haut();

    //FONTION CASE A COCHER
    // initialisation des listbox (select)
    selecteur();

    // FONCTION BOITE MODALE
    modal();

    //TEXTAREA AUTO RESIZE
    textArea();

    //COLLAPSIBLE
    hide_Show();

});

// ********************************************************************
// *                       JS General
// ********************************************************************

function init_plateforme()
{
    // pour le menu hamburger
    $('.button-collapse').sideNav();
    $('#contact-body').hide();


    $("#contact-body").hide().show(1000).css("display", "block");
    $("#access-body").hide().show(2000).css("display" ,"block");

    $(".dropdown-button").dropdown();

}

// ********************************************************************
// *                       Bouton retour vers haut
// ********************************************************************

function retour_haut() {

    $('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');

    var amountScrolled = 300;

    $(window).scroll(function () {
        if ($(window).scrollTop() > amountScrolled) {
            $('a.back-to-top').fadeIn('slow');
        } else {
            $('a.back-to-top').fadeOut('slow');
        }
    });

    $('a.back-to-top, a.simple-back-to-top').click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 700);
        return false;
    });
}

// ********************************************************************
// *                    material select
// ********************************************************************


function selecteur() {

    $(document).ready(function () {
        $('select').material_select();
    });
}

// ********************************************************************
// *                    CALENDAR MODAL
// ********************************************************************

function modal() {

    $(document).ready(function(){

        $('.modal').modal();

    });
}

// ********************************************************************
// *                    TEXTE AREAR
// ********************************************************************

function textArea(){

    $('#textarea').trigger('autoresize');
}

// ********************************************************************
// *                    IMAGE DISPLAY
// ********************************************************************

function hide_Show() {
    $('#test5').click(function () {
        if (this.checked){
            $('.upload_file_event').css('display', 'block')
        }
        else {
            $('.upload_file_event').css('display', 'none')
        }
    })
}




