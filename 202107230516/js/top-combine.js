
var $menu_array = $menu_array || [];

$(window).on('load', function() {
var preWidth = window.innerWidth;
  if (preWidth <= 800) {
    $('#modal_burger').css('top', '-' + $('#header').height() + 'px');
    setNav();
  }
  window.addEventListener("resize", function() {
    if (preWidth >=800 && window.innerWidth < 800) {
      $('#spNavBox01').css({'display': 'block'});
      $('#sp-logo').css('margin-top', $('#header').height() + 'px');
      $('#modal_burger').css('top', '-' + $('#header').height() + 'px');
      setNav();
    }
    preWidth = window.innerWidth;
  });

  $('.spNavBox01_item').each(function(index, element) {
    if($(element).children('.spNavBox01_list').length > 0) {
      $(element).children('a').addClass('arrow');
    }
    if($(element).children('a').attr('target')) {
      $(element).children('a').addClass('link');
    }
  });
if (preWidth < 800) {
  $('#sp-logo').css('margin-top', $('#header').height() + 'px');
  $('#modal_burger').css('top', '-' + $('#header').height() + 'px');
  setNav();
}
else {
  $('#spNavBox01').css({'display': 'block'});
  $('#sp-logo').css('margin-top', $('#header').height() + 'px');
  setNav();
}
  window.addEventListener("resize", function() {
    if (window.innerWidth <= 799) {
      $('main').css('margin-top', 0);
      $('#sp-logo').css('margin-top', $('#header').height() + 'px');
      $('#modal_burger').css('top', '-' + $('#header').height() + 'px');
      setNav();
    }
    else {
      $('#spNavBox01').css({'display': 'block'});
      $('#sp-logo').css('margin-top', $('#header').height() + 'px');
      //$('#modal_burger').css('top', '-' + $('#header').height() + 'px');
      setNav();
      $('main').css('margin-top', $('#header').outerHeight() - 25);
    }
    preWidth = window.innerWidth;

  });
});

function setNav() {
  if (!$('.spNavBox01_item .itemWrapper').length) {
    $('#spNavBox01 a').wrapInner('<span class="itemWrapper"></span>');
  }

  var fileName = location.pathname;

  $('#spNavBox01').waSlideMenu({
		scrollToTopSpeed : 300,
		onLatestClick: function(){
			if ($(this).attr('target')) {
				window.open($(this).attr('href'), '_blank');
			} else {
				window.location.href = $(this).attr('href');
			}
		},
		// 開いているページのメニュー項目を選択状態にする
		afterLoad: function(base) {
      var hideMenu = false;
			var fileName = location.pathname;
			$('li[class^="spNavBox01_item"] a').each(function(index, element) {
				if ($(element).attr('href') && $(element).attr('href') == fileName)  {
          if ($menu_array.indexOf($(element).attr('href')) != -1) {
            $(element).next('.spNavBox01_list').remove();
            $(element).removeClass('arrow');
          }

					var lists = findClickLists($(element).parent());
					var time = 500;
					lists.forEach(function(list) {
						setTimeout(function() {
              if ($menu_array.indexOf($(list).attr('href')) != -1) {
                hideMenu = true;
                $(list).parent('.spNavBox01_item').addClass('select');
                $(list).next('.spNavBox01_list').remove();
                $(list).removeClass('arrow');
              }
              if (!hideMenu) {
                $(list).click();
              }
						}, time);
						time += 500;
					});

					var listElement = $(element).parent('li[class^="spNavBox01_item"]:first');
					listElement.addClass('select');
				}
			});

      $('li[class^="spNavBox01_item"] a').each(function(index, element) {
        // 下層ページをナビから非表示にする
    		if ($menu_array.indexOf($(element).attr('href')) != -1) {
    			$(element).next('.spNavBox01_list').remove();
    		}
      });
		}
	});
}

function findClickLists(element) {
	var lists = [];
	var item = $(element);
	while(true) {
		parentItem = $(item).parent('.spNavBox01_list').parent('.spNavBox01_item');
		var link = $(parentItem).find('a:first');
		if (parentItem.length ==  0) {
			break;
		}
		lists.unshift(link);
		item = parentItem;
	}

	return lists;
}

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
  console.log(position);
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



	//$( '.highlight' ).hover(
//	function () { $(this).fadeTo( 'slow', 0.6 ); },
//	function () { $(this).fadeTo( 'slow', 1 ) } );

});

//fitie.js
this.fitie=function(t){function e(){c.call(t,g+m,e);var a={boxSizing:"content-box",display:"inline-block",overflow:"hidden"};"backgroundColor backgroundImage borderColor borderStyle borderWidth bottom fontSize lineHeight height left opacity margin position right top visibility width".replace(/\w+/g,function(t){a[t]=l[t]}),d.border=d.margin=d.padding=0,d.display="block",d.height=d.width="auto",d.opacity=1;var h=t.videoWidth||t.width,s=t.videoHeight||t.height,u=h/s,v=document.createElement("object-fit");v.appendChild(t.parentNode.replaceChild(v,t));for(var p in a)v.runtimeStyle[p]=a[p];var b;"fill"===i?f?(d.width=o,d.height=n):(d["-ms-transform-origin"]="0% 0%",d["-ms-transform"]="scale("+o/h+","+n/s+")"):(r>u?"contain"===i:"cover"===i)?(b=n*u,d.width=Math.round(b)+"px",d.height=n+"px",d.marginLeft=Math.round((o-b)/2)+"px"):(b=o/u,d.width=o+"px",d.height=Math.round(b)+"px",d.marginTop=Math.round((n-b)/2)+"px")}var i=t.currentStyle["object-fit"];if(i&&/^(contain|cover|fill)$/.test(i)){var o=t.clientWidth,n=t.clientHeight,r=o/n,a=t.nodeName.toLowerCase(),d=t.runtimeStyle,l=t.currentStyle,h=t.addEventListener||t.attachEvent,c=t.removeEventListener||t.detachEvent,g=t.addEventListener?"":"on",f="img"===a,m=f?"load":"loadedmetadata";h.call(t,g+m,e),t.complete&&e()}},this.fitie.init=function(){if(document.body)for(var t=document.querySelectorAll("img,video"),e=-1;t[++e];)fitie(t[e]);else setTimeout(fitie.init)},/MSIE|Trident/.test(navigator.userAgent)&&this.fitie.init();
//# sourceMappingURL=fitie.js.map

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

  // Link設定
  jQuery(document).ready(function ($) {
    // PDFファイルリンクに target="_blank"を付ける
    $("a[href*='.pdf']").attr("target","_blank");

    // 外部リンクに target="_blank"を付ける
    $("a[href]").each(function() {
      if (!this.href.match(new RegExp("^(#|\/|(https?:\/\/" + location.hostname + "))"))) {
        $(this).attr("target", "_blank");
      }
      });
  });

  // youtube
  $('.moviebox .small-thumb').click(function() {
    $('.mainview iframe').remove();
    $('.mainview svg').show();
    $('.mainview img').show();
    var id = $(this).attr('data-id');
    $('.yt-thumb').attr('data-id',id);
    var url = 'https://i.ytimg.com/vi/'+id +'/maxresdefault.jpg';
    var preNum = $('.mainview img').attr('data-num');
    if (url) {
      $('.mainview img').attr('src', url);
      $(this).css({'display': 'none'});

      $('.moviebox .small-thumb').each(function() {
        if (preNum == $(this).attr('data-num')) {
          $(this).css({'display': 'block'});
        }
      });
      $('.mainview img').attr('data-num', $(this).attr('data-num'));
    }
  });

  $(".mainview").click(function (e) {
    var id = $(this).find('img').attr('data-id');
    // 画像をiframeに置き換え
    $(this).find('img').hide().after('<iframe width="750" height="400" src="https://www.youtube.com/embed/'+ id +'?autoplay=1&mute=1&playsinline=1" frameborder="0" allow="encrypted-media" allowfullscreen" style="max-width: 100%;"></iframe>');
    $('.mainview svg').hide();
  });


  // youtube 2020
  /* 右メニュータブ動画クリックで自動再生 */
  $('.videobox_list .videobox_item').click(function() {
    console.log("開始");
    var url = $(this).attr('data-url');
    /*一番近くのvideoview ifrmaeのattrみ変更する（同一ページ内に複数ある場合の対策）*/
    var preNum = $(this).parents('.video_area').find('.videoview iframe').attr('data-num');
    /*選択されたタブは動画リストから消す*/
    if (url) {
      $(this).parents('.video_area').find('.videoview iframe').attr('src', url);
      $(this).css({'display': 'none'});
      /*選択されていない物は表示*/
      $(this).parents('.videobox_list').find('.videobox_item').each(function() {
        if (preNum == $(this).attr('data-num')) {
          $(this).css({'display': 'block'});
        }
      });
      $(this).parents('.video_area').find('.videoview iframe').attr('data-num', $(this).attr('data-num'));
    }
  });

  var preWidth = window.innerWidth;
  $(window).resize(function () {
    if (preWidth > 800 && window.innerWidth <= 800) {
      $('.peoplebox_image').each(function() {
        if ($(this).hasClass('pc-none')) {
          $(this).css({'display': 'block'});
        }
        if ($(this).hasClass('sp-none')) {
          $(this).css({'display': 'none'});
        }
      });
    }

    if (preWidth <= 800 && window.innerWidth > 800) {
      $('.peoplebox_image').each(function() {
        if ($(this).hasClass('sp-none')) {
          $(this).css({'display': 'block'});
        }
        if ($(this).hasClass('pc-none')) {
          $(this).css({'display': 'none'});
        }
      });
    }
    preWidth = window.innerWidth;
  });
});

/*速度改善対応*/
jQuery.event.special.touchstart={setup:function(e,t,s){t.includes("noPreventDefault")?this.addEventListener("touchstart",s,{passive:!1}):this.addEventListener("touchstart",s,{passive:!0})}},jQuery.event.special.touchmove={setup:function(e,t,s){t.includes("noPreventDefault")?this.addEventListener("touchmove",s,{passive:!1}):this.addEventListener("touchmove",s,{passive:!0})}},jQuery.event.special.wheel={setup:function(e,t,s){this.addEventListener("wheel",s,{passive:!0})}},jQuery.event.special.mousewheel={setup:function(e,t,s){this.addEventListener("mousewheel",s,{passive:!0})}};


//gsearch
(function() {
  var cx = '015456245027213990632:5z_pbtjgvc8';
  var gcse = document.createElement('script');
  gcse.type = 'text/javascript';
  gcse.async = true;
  gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(gcse, s);
})();
