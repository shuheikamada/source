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
