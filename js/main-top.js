
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
    var presrc = $('.mainview img').attr('src');
    var preid = $('.mainview img').attr('data-id');

    var src =  $(this).find('img').attr('src');
    var id =  $(this).attr('id');

    $('.mainview img').attr('src', src);
    $('.mainview img').attr('data-id',id);
    $(this).find('img').attr(presrc);
    $(this).attr(preid);

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
