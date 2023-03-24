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

//===================Article 1===================\\
ScrollReveal().reveal('.art1_h2',{ distance: '50px', delay: 200, origin:'top', viewFactor: .5});
ScrollReveal().reveal('.art1_p1',{ distance: '50px', delay: 400, origin:'top', viewFactor: .6});
ScrollReveal().reveal('.art1_p2',{ distance: '50px', delay: 600, origin:'top', viewFactor: .7});
ScrollReveal().reveal('.art1_video',{ delay: 700, opacity:0, viewFactor: .4});
//===================Article 3===================\\
ScrollReveal().reveal('.art3_p',{ distance: '100px', delay: 200, origin:'top', viewFactor: .2});
ScrollReveal().reveal('.maquette3d',{ distance: '100px', delay: 200, origin:'bottom', viewFactor: .5 });
//===================Article 4===================\\
ScrollReveal().reveal('.counter',{opacity:0, viewFactor: .5 });
ScrollReveal().reveal('.counter2',{opacity:0, viewFactor: .5 });
ScrollReveal().reveal('.counter3',{opacity:0, viewFactor: .5 });
ScrollReveal().reveal('.counter4',{opacity:0, viewFactor: .5 });
//===================Article 5===================\\
ScrollReveal().reveal('.art5_h2',{ distance: '50px', delay: 200, origin:'left',  viewFactor: .5});
ScrollReveal().reveal('.text',{ distance: '100px', delay: 200, origin:'top', viewFactor: .7 });
ScrollReveal().reveal('.map',{ distance: '100px', delay: 200, origin:'bottom', viewFactor: .7 });