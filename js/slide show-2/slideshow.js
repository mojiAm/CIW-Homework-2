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
	
	function goToSlide(n){
		train.style.left=(-570*n)+'px';
	}

}