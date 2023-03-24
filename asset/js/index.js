var $headline = $('.headline'),
    $inner = $('.inner'),
    $nav = $('nav'),
    navHeight = 120;

$(window).scroll(function() {
  var scrollTop = $(this).scrollTop(),
      headlineHeight = $headline.outerHeight() - navHeight,
      navOffset = $nav.offset().top;

  $headline.css({
    'opacity': (1 - scrollTop / headlineHeight)
  });
  $inner.children().css({
    'transform': 'translateY('+ scrollTop * 0.4 +'px)'
  });
  if (navOffset > headlineHeight) {
    $nav.addClass('scrolled');
    $('.scrolled').find("img").attr('src', '../asset/img/logoblanc.png');
  } else {
    $nav.removeClass('scrolled');
    $nav.addClass('1');
    $('.1').find("img").attr('src', '../asset/img/logo-mmi.png');
  }
});


