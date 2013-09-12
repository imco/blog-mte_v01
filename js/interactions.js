$(function(){
	$('#content .share-bt a.button-frame').click(function(e){
		e.preventDefault();
		$(this).prev().toggleClass('on');
	});
});
