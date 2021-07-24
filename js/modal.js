$(document).ready(function() {
	var current_scrollY;
  // モーダルの高さを変更
  $('#modal_burger').height(screen.height);
	$(window).on('resize', function(){
		$('#modal_burger').height(screen.height);
	});

	// モーダル1の開閉
	$('.toggle-aoyama-style').click(function() {
		current_scrollY = $(window).scrollTop();
		$('main').css({
			position: 'fixed',
			width: '100%',
			top: -1 * current_scrollY
		});
		$('footer').css({
			position: 'fixed',
			width: '100%',
			top: (-1 * current_scrollY) + $('main').height()
		});
		$('#modal_aoyama_style').fadeIn(300);
	});

	$('.close_modal_aoyama_style').click(function() {
		$('main').attr({style: ''});
		$('footer').attr({style: ''});
		$('html, body').prop({scrollTop: current_scrollY});
		$('#modal_aoyama_style').fadeOut(300);
	});


	// モーダル2の開閉
	$('.toggle-language').click(function() {
		current_scrollY = $(window).scrollTop();
		$('main').css({
			position: 'fixed',
			width: '100%',
			top: -1 * current_scrollY
		});
		$('footer').css({
			position: 'fixed',
			width: '100%',
			top: (-1 * current_scrollY) + $('main').height()
		});
		$('#modal_language').fadeIn(300);
	});

	$('.close_modal_language').click(function() {
		$('main').attr({style: ''});
		$('footer').attr({style: ''});
		$('html, body').prop({scrollTop: current_scrollY});
		$('#modal_language').fadeOut(300);
	});


	$('.toggle-burger').click(function() {
		current_scrollY = $(window).scrollTop();
		$('main').css({
			position: 'fixed',
			width: '100%',
			top: -1 * current_scrollY
		});
		$('footer').css({
			position: 'fixed',
			width: '100%',
			top: (-1 * current_scrollY) + $('main').height()
		});
		$('#modal_burger').css({opacity: 0, visibility: 'visible'}).animate({
			opacity: 1
		}, 300);
	});

	$('.close_modal_burger').click(function() {
		$('main').attr({style: ''});
		$('footer').attr({style: ''});
		$('html, body').prop({scrollTop: current_scrollY});
		$('#modal_burger').animate({
			opacity: 0
		}, 300);
		setTimeout(function() {
			$('#modal_burger').css({'visibility': 'hidden'})
		}, 300);
	});

	$('.navBox01_list > .toggle-language').click(function() {
		$('main').attr({style: ''});
		$('footer').attr({style: ''});
		$('html, body').prop({scrollTop: current_scrollY});
		$('#modal_burger').animate({
			opacity: 0
		}, 100);
		setTimeout(function() {
			$('#modal_burger').css({'visibility': 'hidden'})
		}, 100);
	});

});
