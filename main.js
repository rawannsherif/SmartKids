$(document).ready(function(){
	$('.acc h3').click(function(){
		$(this).next('.content1').slideToggle();
		$(this).parent().toggleClass('active');
		$(this).parent().siblings().children('.content1').slideUp();
		$(this).parent().siblings().removeClass('active');
	});
});