// 所定の画面幅を基準にクラス名を削除または、追加する
$(window).on('load resize', function() {
  var size = $(window).width();
  const smSize = 990;

  var elem = document.getElementById('navbarId');
  
  if(size <= smSize) {
    if(elem.classList.contains('nav-underline')) {
      $('#navbarId').removeClass('nav-underline')
    }
  } else {
    if(!elem.classList.contains('nav-underline')) {
      $('#navbarId').addClass('nav-underline')
    }
  }
});

$('a[href^="#"]').click(function(){
  var speed = 50;　//スクロールスピード
  var href= $(this).attr("href");
  var target = $(href == "#" || href == "" ? 'html' : href);
  var position = target.offset().top;
  $("html, body").animate({scrollTop:position}, speed, "swing");
  return false;
});