window.onload=function(){
	var slideshow=document.getElementsByClassName('slideshow').item(0);
	var train=slideshow.getElementsByClassName('train').item(0);
	var list=slideshow.getElementsByClassName('btn').item(0).getElementsByTagName('li');
	

	for (var i=0;i<list.length;i++){
		(function(j){
			list.item(j).onclick=function(){
				goToSlide(j);
			}
		})(i)
	}
	
	var currentSlide=0;
	function goToSlide(n){
		if (n > list.length-1) n=0;
		train.style.left=(-570*n)+'px';
		list.item(currentSlide).className='';
		list.item(n).className='active';
		currentSlide=n;
	}

	var nextSlide=function(){
		goToSlide(currentSlide+1);
	}

	goToSlide(0);

	setInterval(nextSlide,5000);
}