// /*$('.show').on('click',function(){
//  $(this).slideToggle();
// }); */

$(document).ready(function() {
//Cas .Tourisme survolée
	function toggleTourisme() {
		$('.tourisme').toggleClass("hover");
	}
	$('.tourisme').on('mouseenter', toggleTourisme);
	$('.tourisme').on('mouseleave', toggleTourisme); 

//Cas .Travail survolée
	function toggleTravail() {
		$('.travail').toggleClass("hover");
	}
	$('.travail').on('mouseenter', toggleTravail);
	$('.travail').on('mouseleave', toggleTravail); 

//Cas .Ecologie survolée
	function toggleEcologie() {
		$('.ecologie').toggleClass("hover");
	}
	$('.ecologie').on('mouseenter', toggleEcologie);
	$('.ecologie').on('mouseleave', toggleEcologie); 


//Cas .Accessibilite survolée
	function toggleAccessibilite() {
		$('.accessibilite').toggleClass("hover");
	}
	$('.accessibilite').on('mouseenter', toggleAccessibilite);
	$('.accessibilite').on('mouseleave', toggleAccessibilite); 

	// typed.js for homepage's sentence
    $(function typedFunction(string1, string2){
        $("#index_catchPhrase").typed({
            strings: [string1, string2],
            typeSpeed: 6
        });
    });
});