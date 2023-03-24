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
ScrollReveal().reveal('.art1_h2',{ distance: '50px', delay: 200, origin:'top', viewFactor: .5 });
ScrollReveal().reveal('.art1_p1',{ distance: '50px', delay: 400, origin:'top', viewFactor: .6});
ScrollReveal().reveal('.art1_h3',{ distance: '50px', delay: 600, origin:'top', viewFactor: .5 });
ScrollReveal().reveal('.spe-caracter',{ distance: '100px', delay: 200, origin:'top', viewFactor: .8});
ScrollReveal().reveal('.spe-caracter2',{ distance: '100px', delay: 200, origin:'bottom', viewFactor: .8});
ScrollReveal().reveal('.art1_video',{ delay: 200, opacity:0, viewFactor: .4});
//===================Article 3===================\\
ScrollReveal().reveal('.art3_p1',{ distance: '100px', delay: 300, origin:'left', viewFactor: .7});
ScrollReveal().reveal('.art3_img',{distance: '100px', delay: 300, origin:'right', viewFactor: .7});
ScrollReveal().reveal('.art3_p2',{ distance: '50px', delay: 200, origin:'top', viewFactor: .8});
//===================Article 4===================\\
ScrollReveal().reveal('.art4_txt',{ distance: '100px', delay: 300, origin:'left', viewFactor: .7});
ScrollReveal().reveal('.art4_graph',{distance: '100px', delay: 300, origin:'right', viewFactor: .7});
ScrollReveal().reveal('.art4_txt2',{ distance: '100px', delay: 300, origin:'right', viewFactor: .7});
ScrollReveal().reveal('.art4_graph2',{distance: '100px', delay: 300, origin:'left', viewFactor: .7});
//===================Article 6===================\\
ScrollReveal().reveal('.art6_p2',{ distance: '50px', delay: 500, origin:'top', viewFactor: .6});
