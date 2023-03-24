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
    $('.scrolled').find("img").attr('src', 'asset/img/logoblanc.png');
  } else {
    $nav.removeClass('scrolled');
    $nav.addClass('1');
    $('.1').find("img").attr('src', 'asset/img/logo-mmi.png');
  }
});




/*=========================================================Scroll apparition==========================================================*/
/*====================================================================================================================================*/
ScrollReveal({ 
  reset: false,
  duration : 1000

})  



ScrollReveal().reveal('.art1_h2',{ distance: '50px', delay: 200, origin:'top', viewFactor: .5 });
ScrollReveal().reveal('.art1_p1',{ distance: '50px', delay: 400, origin:'top', viewFactor: .6});
ScrollReveal().reveal('.art1_p2',{ distance: '50px', delay: 600, origin:'top', viewFactor: .7});
ScrollReveal().reveal('.art1_p3',{ distance: '50px', delay: 600, origin:'top', viewFactor: .8});

ScrollReveal().reveal('.spe-caracter',{ distance: '100px', delay: 200, origin:'top', viewFactor: .8});
ScrollReveal().reveal('.spe-caracter2',{ distance: '100px', delay: 200, origin:'bottom', viewFactor: .8});

ScrollReveal().reveal('.art2_h2',{ distance: '50px', delay: 200, origin:'left',  viewFactor: .5});
ScrollReveal().reveal('.art2_p1',{ distance: '50px', delay: 200, origin:'right',  viewFactor: .5});


ScrollReveal().reveal('.art5_h2',{ distance: '50px', delay: 200, origin:'left',  viewFactor: .5});
ScrollReveal().reveal('.contents',{ distance: '100px', delay: 200, origin:'top', viewFactor: .5});
ScrollReveal().reveal('.contents2',{ distance: '100px', delay: 200, origin:'bottom', viewFactor: .5});

