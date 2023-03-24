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
    $('.scrolled').find("img").attr('src', '../img/logoblanc.png');
  } else {
    $nav.removeClass('scrolled');
    $nav.addClass('1');
    $('.1').find("img").attr('src', '../img/logo-mmi.png');
  }
});

/*=========================================================Scroll apparition==========================================================*/
/*====================================================================================================================================*/
ScrollReveal({ 
    reset: false,
    duration : 1000
  
  })  
ScrollReveal().reveal('.contents',{ distance: '100px', delay: 200, origin:'top', viewFactor: .5});
ScrollReveal().reveal('.contents2',{ distance: '100px', delay: 200, origin:'bottom', viewFactor: .5});
