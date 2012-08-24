$(function(){
	var lis= $('nav.menu li a');
	
	var step=500;
	lis.each(function(){
		$(this).animate({
			top:-79
		},step,'ease-in-out');
		step+=300;
	});

	lis.each(function(){
		var that=$(this);
		$(this).mouseover(function(){
			that.animate({
				top:0
			},500,'ease-in')
		});
	});

	lis.each(function(){
	var that=$(this);
	$(this).mouseout(function(){
			that.animate({
				top:-79
			},500,'ease-out')
		});
	});

});