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

// Materialize js pour bouton radio
$('#mySwitch').prop('checked');

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

//***************************************************//
//    Modal                                         //
//****************************************************
// $(document).ready(function () {
//     $('.trCat').click(function () {
//         $(".trSousCat").fadeIn("low").next().fadeOut;
//     });
// });

// $(document).ready(function () {
//     $('.trCat').click(function () {
//         $(".trSousCat").fadeOut("low");
//     });
// });

$(function () {
    if ($('#toggleLink').attr('rel') == 'hidden') {
        $('.trSousCat').hide();
    }
    else {
        $('.trSousCat').show();
    }
    $('.tdCat a').on('click', function (evt) {
        evt.preventDefault();
        $('.trSousCat').toggle();
    });
});