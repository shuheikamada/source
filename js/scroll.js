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
