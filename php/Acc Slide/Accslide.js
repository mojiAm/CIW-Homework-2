$(document).ready(function(){
	slides= $('div.slideshow .train > div');
	var widths= Math.ceil(1160/5);

	slides.css({width:widths+'px'});
	

	slides.mouseover(function(){
		slides.css({width:'50px'});
		$(this).css({width:'960px'});
	})
	slides.mouseout(function(){
		slides.css({width:widths+'px'});
	})
})