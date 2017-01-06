/**
 * Created by acrobat on 02/12/2016.
 */

//***************************************************//
//    Materialize js pour accordeon post index       //
//*****************************************************
$(document).ready(function(){
    $('.collapsible').collapsible();
});

//***************************************************//
//    Materialize js pour select                     //
//*****************************************************
$(document).ready(function() {
    $('select').material_select();
});

$('select').material_select('destroy');

//***************************************************//
// Gestion aside post index
//***************************************************//
$('#expand').click(function(){
    $('aside').toggle(400);
});

//***************************************************//
//    NavBar                                         //
//****************************************************
$(document).ready(function() {
    Materialize.fadeInImage('#profilepic');
    Materialize.showStaggeredList('#staggered-list');
});

//***************************************************//
//    ShowDernierPost                                //
//****************************************************
//   Div de meme taille
//****************************************************
$(document).ready(function() {
    if ($(window).width() > 739) {
        var heightDiv = $('.colCustom').css('width');
        $('.colCustom').css("height", heightDiv);
        $(window).resize(function() {
            var heightDiv = $('.colCustom').css('width');
            $('.colCustom').css("height", heightDiv);
        });
    }
    else {
        var heightDiv = $('.colCustom').css('width');
        $('.colCustom').css("height", heightDiv/2);
        $(window).resize(function() {
            var heightDiv = $('.colCustom').css('width');
            $('.colCustom').css("height", heightDiv/2);
        });
    }
});

// Taille image dans div lastPostContenu
//****************************************************
$(document).ready( function () {
// Nb d'image dans le contenu :
    var nbImg = $('.lastPostContenu > p > img').length;

    var heightImg = $('.lastPostContenu > p > img').css('height');
    var widthImg = $('.lastPostContenu > p > img').css('width');
    $('.lastPostContenu > p > img').each(function(){
        $(this).css('height', '25%').css('width', '25%');
    });
});

//***************************************************//
//    index categorie - Accodeon                     //
//****************************************************
$(document).ready(function() {
    //ACCORDION BUTTON ACTION (ON CLICK DO THE FOLLOWING)
    $('[id^="accordionButtonCat_"]').click(function() {
        //REMOVE THE ON CLASS FROM ALL BUTTONS
        $('[id^="accordionButtonCat_"]').removeClass('on');
        //NO MATTER WHAT WE CLOSE ALL OPEN SLIDES
        $('.accordionContent').slideUp('normal');
        //IF THE NEXT SLIDE WASN'T OPEN THEN OPEN IT
        if($(this).next().is(':hidden') == true) {
            //ADD THE ON CLASS TO THE BUTTON
            $(this).addClass('on');
            //OPEN THE SLIDE
            $(this).next().slideDown('normal');
        }
    });

    /*** REMOVE IF MOUSEOVER IS NOT REQUIRED ***/
    //ADDS THE .OVER CLASS FROM THE STYLESHEET ON MOUSEOVER
    $('[id^="accordionButtonCat_"]').mouseover(function() {
        $(this).addClass('over');

    //ON MOUSEOUT REMOVE THE OVER CLASS
    }).mouseout(function() {
        $(this).removeClass('over');
    });
    /*** END REMOVE IF MOUSEOVER IS NOT REQUIRED ***/
    /***********************************************
     CLOSES ALL S ON PAGE LOAD
     ***********************************************/
    $('.accordionContent').hide();
});


//****************************
// Modal
//****************************
$(document).ready(function(){
    $('.modal').modal();
});