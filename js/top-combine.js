
var $menu_array = $menu_array || [];


window.addEventListener("resize", function() {
  var preWidth = window.innerWidth;
  if (preWidth >=800 && window.innerWidth < 800) {
    $('#spNavBox01').css({'display': 'block'});
    $('#sp-logo').css('margin-top', $('#header').height() + 'px');
    $('#modal_burger').css('top', '-' + $('#header').height() + 'px');
    setNav();
  }else if(window.innerWidth <= 799){
    $('main').css('margin-top', 0);
    $('#sp-logo').css('margin-top', $('#header').height() + 'px');
    $('#modal_burger').css('top', '-' + $('#header').height() + 'px');
    setNav();
  }else{
    $('#spNavBox01').css({'display': 'block'});
    $('#sp-logo').css('margin-top', $('#header').height() + 'px');
    //$('#modal_burger').css('top', '-' + $('#header').height() + 'px');
    setNav();
    $('main').css('margin-top', $('#header').outerHeight() - 25);
  }
});

function getParentURL(url) {
	return url.replace(/[^/]*$/, "");
}

//scroll.js
var urlHash = location.hash;
if (urlHash) {
  var hashString = location.hash.substr(1);
  history.replaceState('', document.title, window.location.pathname);
}

$(function(){
  var headerHeight = $('#header-box').height();
  var minusHeaderHeight = headerHeight + 20;
  $('a[href^="#"]').not('.noscroll').on('click', function() {
  var speed = 300;
  var easing = 'swing';
  var href= $(this).attr("href");
  var target = $(href == "#" || href == "" ? 'html' : href);
  var position = target.offset().top;
  $('html, body').animate({scrollTop:position - minusHeaderHeight}, speed, easing);
  return false;
  });

  if (urlHash) {
    var speed = 300;
    var easing = 'swing';
    var target = $(urlHash);
    var position = target.offset().top;
    $('html, body').animate({scrollTop:position - minusHeaderHeight}, speed, easing);
  }
});

//modal.js
$(document).ready(function() {
	var current_scrollY;
  // モーダルの高さを変更
  $('#modal_burger').height(screen.height);
	$(window).on('resize', function(){
		$('#modal_burger').height(screen.height);
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

//btnjs
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
});


//main-top

$(document).ready(function(){
  // first view animation
  $('body.top').addClass('show');

  // peoplebox
  var scrollTop = document.body.scrollTop || document.documentElement.scrollTop;
  if (scrollTop != 0) {
    window.scrollBy(0, 1);
  }

  $(window).scroll(function (){
    $(".peoplebox .peoplebox_item").each(function(){
      var pos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > pos - windowHeight + windowHeight/5){
        if (!$(this).hasClass('show'))  {
          $(this).addClass('show');
          $(this).find('.rectangle').fadeIn(1000);
          if (window.innerWidth > 800) {
            $(this).find('.peoplebox_image.sp-none').fadeIn(1000);
          } else {
            $(this).find('.peoplebox_image.pc-none').fadeIn(1000);
          }
          $(this).find('.peopleinfo03').delay(1000).queue(function(next) {
            $(this).addClass('show');
          });
          $(this).find('.peopleinfo01').delay(1000).fadeIn(1000);
          $(this).find('.peopleinfo02').delay(1000).fadeIn(1000);
          $(this).find('.peopleinfo03').delay(1000).fadeIn(1000);
          $(this).find('.border').delay(2500).queue(function(next) {
            $(this).addClass('show');
          });
        }
      }
    });

    $(".newsbox .newsbox_item").each(function(){
      var pos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > pos - windowHeight + windowHeight/5){
        if (!$(this).hasClass('show'))  {
          $(this).addClass('show');
        }
      }
    });
  });

  // youtube
  $('.moviebox .small-thumb').click(function() {
    $('.mainview iframe').remove();
    $('.mainview svg').show();
    $('.mainview img').show();
    var presrc = $('.mainview img').attr('src');
    var preid = $('.mainview img').attr('data-id');

    var src =  $(this).find('img').attr('src');
    var id =  $(this).attr('data-id');

    $('.mainview img').attr('src', src);
    $('.mainview img').attr('data-id',id);
    $(this).find('img').attr('src',presrc);
    $(this).attr('data-id',preid);
  });

  $(".mainview").click(function (e) {
    var id = $(this).find('img').attr('data-id');
    // 画像をiframeに置き換え
    $(this).find('img').hide().after('<iframe width="750" height="400" src="https://www.youtube.com/embed/'+ id +'?autoplay=1&mute=1&playsinline=1" frameborder="0" allow="encrypted-media" allowfullscreen" style="max-width: 100%;"></iframe>');
    $('.mainview svg').hide();
  });

});

/*速度改善対応*/
jQuery.event.special.touchstart={setup:function(e,t,s){t.indexOf("noPreventDefault")>=0?this.addEventListener("touchstart",s,{passive:!1}):this.addEventListener("touchstart",s,{passive:!0})}},jQuery.event.special.touchmove={setup:function(e,t,s){t.indexOf("noPreventDefault")>=0?this.addEventListener("touchmove",s,{passive:!1}):this.addEventListener("touchmove",s,{passive:!0})}},jQuery.event.special.wheel={setup:function(e,t,s){this.addEventListener("wheel",s,{passive:!0})}},jQuery.event.special.mousewheel={setup:function(e,t,s){this.addEventListener("mousewheel",s,{passive:!0})}};


//gsearch
/*(function() {
  var cx = '015456245027213990632:5z_pbtjgvc8';
  var gcse = document.createElement('script');
  gcse.type = 'text/javascript';
  gcse.async = true;
  gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(gcse, s);
})();*/
