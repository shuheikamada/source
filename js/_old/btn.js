$(function() {
	var topBtn = $('#btntop');
	topBtn.hide();
	//スクロールが100に達したらボタン表示
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			topBtn.fadeIn();
			$('#emergency').fadeOut('fast');
		} else {
			topBtn.fadeOut();
			$('#emergency').fadeIn('fast');
		}
	});
	//スクロールしてトップ
    topBtn.click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 700);
		return false;
    });



	//$( '.highlight' ).hover(
//	function () { $(this).fadeTo( 'slow', 0.6 ); },
//	function () { $(this).fadeTo( 'slow', 1 ) } );

});
