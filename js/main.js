$('header h1').animate({
	'top':0,
	'opacity':1
}, 700, function(){
	$('header h2 span').lettering();
	$('header h2 span').show();
	$('header h2 span').children().each(function(index){
		$(this).delay(30*index).animate({
			'opacity':1,
			'top':'-1px'
		},150);
	});
});

;(function($){
	$(window).scroll(function(){
		pos = $(this).scrollTop();
		$('.circle--2').css({
			'left':pos+'px',
			'opacity': (160 - (pos/2))/100,
			'-webkit-transform':'rotate('+pos+'deg)',
			'-moz-transform':'rotate('+pos+'deg)',
		});
		$('.circle--1').css({
			'right':pos+'px',
			'opacity': (160 - (pos/2))/100,
			'-webkit-transform':'rotate('+(pos*-1)+'deg)',
			'-moz-transform':'rotate('+(pos*-1)+'deg)'
		});
	});
})(jQuery);
