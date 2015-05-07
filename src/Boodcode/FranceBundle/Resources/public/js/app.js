$(function(){
	$.globals = {
		site_root:  'http://www.francoise-aberton.com/'
	} 

	$('.grid').on('click', '.work', function(){
		document.location.href =  $.globals.site_root + $(this).attr('id');
	})
	ulResize = false;
	$(window).bind('resize',function(){
		if(ulResize)
			clearTimeout(ulResize);
			redispatch();
	})
	redispatch();

	$('.grid .work').each(function(i, elem){
		var src = $(this).css('background-image').replace(/^url\(["']?/, '').replace(/["']?\)$/, '');
		var div_work = $(this);
		div_work.css({'opacity':0, 'top':'50px'});
		var img = new Image();
		img.src = src;
		img.className = 'image'+i;
		img.width= img.height = 0;
		$('body').append(img);
		$('.image'+i).load(function(){
			console.log("chargement de l'image image "+ i );
			div_work.animate({'opacity':1, 'top':'0px'}, 500, 'easeOutQuad');
			$('.image'+i).remove();
		})
	})
})



function redispatch(){
	ulResize = setTimeout(function(){
		var bodyWidth = document.body.clientWidth, 
			bodyHeight = document.body.clientHeight,
			ulClientSize = Math.floor($('#main').width() / 154) * 154 ;
		//console.log(bodyHeight);
		$('ul.clients').animate({left : (bodyWidth - ulClientSize) /2 - 30}, 500, 'easeOutQuad');
		if(bodyWidth > 960 && bodyHeight>620) $('div.grid').animate({top : (bodyHeight - 400)/2 - 130}, 500,'easeOutQuad');
		//if(bodyWidth > 960 && bodyHeight>820) $('div.slideshow').animate({top : (bodyHeight - 600)/2 - 130}, 500,'easeOutQuad');
		
	},
	100);
}