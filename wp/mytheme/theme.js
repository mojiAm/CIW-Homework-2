$(function(){
	$('.get_img a').click(function(){
		$('.darkbox').css({
			display: 'block',
			'background-image': 'url(' + $(this).attr('href') + ')',
			'background-repeat': 'no-repeat'
		}).animate({
			opacity: 1
		},500).click(function(){
			$(this).animate({
				opacity: 0,
			},500,function(){
				$(this).css({display: 'none'});
			})
		})
		return false;
	});
})