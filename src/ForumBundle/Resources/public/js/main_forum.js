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

// Gestion aside post index
$('#expand').click(function(){
    $('aside').toggle(400);
});


//***************************************************//
//    Materialize js pagination                      //
//*****************************************************

//***************************************************//
//    rotation icone barre index                    //
//****************************************************
// Niveau catégorie
var rotated = false;
$(".pointer").click(function() {
  if (!rotated) {
    $(this).find(".fa-superpowers").css({
      "-moz-transform": "rotate(45deg)",
       "-webkit-transform": "rotate(45deg)",
        "-o-transform": "rotate(45deg)",
         "-ms-transform": "rotate(45deg)",
          "transform": "rotate(45deg)",
        "color" : "#FFF",
      "font-weight": "bold"
    });
    $(this).find(".fa-superpowers").css({

    });
  } else {
    $(this).find(".fa-superpowers").css({
      "-moz-transform": "rotate(0deg)",
       "-webkit-transform": "rotate(0deg)",
        "-o-transform": "rotate(0deg)",
         "-ms-transform": "rotate(0deg)",
          "transform": "rotate(0deg)",
      "color" : "#DEDEDE"
    });
  }
  // Toggle the flag
  rotated = !rotated;
});

