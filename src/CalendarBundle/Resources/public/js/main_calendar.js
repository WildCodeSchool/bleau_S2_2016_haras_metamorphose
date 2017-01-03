// ********************************************************************
// *                       Appel Fonction
// ********************************************************************
jQuery(document).ready(function($) {

    console.log('jQuery de main.js a démarré : ligne 6');
    init_plateforme();

    // RETOUR VERS LE HAUT
    // retour_haut();

    //FONTION CASE A COCHER
    // initialisation des listbox (select)
    selecteur();

    // FONCTION BOITE MODALE
    modal();

});

// ********************************************************************
// *                       JS General
// ********************************************************************

function init_plateforme()
{
    console.log('APP.JS - FONCTION INIT_PLATEFORME a démarré : ligne 38');
    // pour le menu hamburger
    $('.button-collapse').sideNav();
    $('#contact-body').hide();


    $("#contact-body").hide().show(1000).css("display", "block");
    $("#access-body").hide().show(2000).css("display" ,"block");

    $('#textarea1').trigger('autoresize');

    $(".dropdown-button").dropdown();

}

// ********************************************************************
// *                       Bouton retour vers haut
// ********************************************************************

function retour_haut() {

    console.log('APP.JS - FONCTION RETOUR_HAUT a démarré : ligne 81');

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

    console.log('APP.JS - FONCTION SELECTEUR a démarré : ligne 127');
    $(document).ready(function () {
        // Materialize.updateTextFields();
        $('select').material_select();
    });

}

// ********************************************************************
// *                    CALENDAR MODAL
// ********************************************************************

function modal() {

    console.log('APP.JS - FONCTION MODAL a démarré : ligne 140');

    $(document).ready(function(){

        $('.modal').modal();

    });
}

