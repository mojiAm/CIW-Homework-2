window.onload=function(){
	var slideshow=document.getElementsByClassName('slideshow').item(0);
	var train=slideshow.getElementsByClassName('train').item(0);
	var list=slideshow.getElementsByClassName('btn').item(0).getElementsByTagName('li');
	var currentSlide=0;
	var play=false;

	function gotoslide(n){
		if (n > list.length-1) n=0;
		train.style.left=(-570*n)+'px';
		list.item(currentSlide).className='';
		list.item(n).className='active';
		currentSlide=n;
	}

	function nextslide(){
		gotoslide(currentSlide+1);
	}

	autoPlay= train.onmouseout=function(){
		play= setInterval(nextslide,2000);
	}

	autoStop= train.onmouseover=function(){
		clearInterval(play);
	}

	for (var i=0;i<list.length;i++){
		(function(j){
			list.item(j).onclick=function(){
				gotoslide(j);
			}
		})(i)
	}

	gotoslide(0);
	autoPlay();
}
