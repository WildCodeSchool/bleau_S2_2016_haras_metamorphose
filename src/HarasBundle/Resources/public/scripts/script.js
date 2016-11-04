// /*$('.show').on('click',function(){
//  $(this).slideToggle();
// }); */

$(document).ready(function() {
	$('html').addClass('jQuery-fonctionne');
//Survol des liens vers les sections
//Cas .section1 survolée
	function toggleSection1() {
		$('.section1Link').toggleClass("hover");
	}
	var section = $('.section1Link');
	section.on('mouseenter', toggleSection1);
	section.on('mouseleave', toggleSection1);

//Cas .section2 survolée
	function toggleSection2() {
		$('.section2Link').toggleClass("hover");
	}
	section = $('.section2Link');
	section.on('mouseenter', toggleSection2);
	section.on('mouseleave', toggleSection2);

//Cas .section3 survolée
	function toggleSection3() {
		$('.section3Link').toggleClass("hover");
	}
	section = $('.section3Link');
	section.on('mouseenter', toggleSection3);
	section.on('mouseleave', toggleSection3);

//Cas .section4 survolée
	function toggleSection4() {
		$('.section4Link').toggleClass("hover");
	}
	section = $('.section4Link');
	section.on('mouseenter', toggleSection4);
	section.on('mouseleave', toggleSection4);
});