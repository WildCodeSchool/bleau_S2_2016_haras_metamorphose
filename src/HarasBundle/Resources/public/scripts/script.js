// /*$('.show').on('click',function(){
//  $(this).slideToggle();
// }); */

$(document).ready(function() {
	$('html').addClass('jQuery-fonctionne');
//Survol des liens vers les sections
//Cas .section1 survolée
	function toggleSection1() {
		$('.section1').toggleClass("hover");
	}
	var section = $('.section1');
	section.on('mouseenter', toggleSection1);
	section.on('mouseleave', toggleSection1);

//Cas .section2 survolée
	function toggleSection2() {
		$('.section2').toggleClass("hover");
	}
	section = $('.section2');
	section.on('mouseenter', toggleSection2);
	section.on('mouseleave', toggleSection2);

//Cas .section3 survolée
	function toggleSection3() {
		$('.section3').toggleClass("hover");
	}
	section = $('.section3');
	section.on('mouseenter', toggleSection3);
	section.on('mouseleave', toggleSection3);

//Cas .section4 survolée
	function toggleSection4() {
		$('.section4').toggleClass("hover");
	}
	section = $('.section4');
	section.on('mouseenter', toggleSection4);
	section.on('mouseleave', toggleSection4);
});