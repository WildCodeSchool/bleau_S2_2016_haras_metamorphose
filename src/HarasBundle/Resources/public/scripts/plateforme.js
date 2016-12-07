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

//
$(document).ready(function() {
    $('select').material_select();
  });

$('select').material_select('destroy');

// Materialize js pour bouton radio
$('#mySwitch').prop('checked')

// Gestion aside post index
$('#expand').click(function(){
    $('aside').toggle(400);
});