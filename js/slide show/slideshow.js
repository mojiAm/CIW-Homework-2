window.onload=function(){
	var slideshow=document.getElementsByClassName('slideshow').item(0);
	var train=document.getElementsByClassName('train').item(0);
	var cslide=0;
	goToSlide=function(n){
		train.style.left=(-450*n)+'px';
		list.item(cslide).className='';
		list.item(n).className='active';
		cslide=n;
	}
	var list=slideshow.getElementsByClassName('btn').item(0).getElementsByTagName('li');
	for (i=0;i<list.length;i++){
		(function(j){
			list.item(j).onclick=function(){
				goToSlide(j);
			}
		})(i);
	}

}