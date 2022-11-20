$('video').hide();
$('footer').hide();
$('.img-2').hide();
$('.scene-2').hide();
let deltaPos = $(window).scrollTop();
document.querySelector('video').playbackRate = 1;

// START SCENE-1

$('video').fadeIn(500);
$('.scene-1 p:nth-child(1)')
  .delay(1500)
  .css('visibility', 'visible')
  .animate({ opacity: 1 }, 2550);

$('.scene-1 p:nth-child(1)').fadeTo(1000, 0.1);

$('.scene-1 p:nth-child(2)')
  .delay(4000)
  .css('visibility', 'visible')
  .animate({ opacity: 1 }, 1550);

$('.scene-1 p:nth-child(2)').fadeTo(1000, 0.1);

$('.scene-1 p:nth-child(3)')
  .delay(5500)
  .css('visibility', 'visible')
  .animate({ opacity: 1 }, 2550);

$('.scene-1 p:nth-child(3)').fadeTo(1000, 0.1);

$('.scene-1 p:nth-child(4)')
  .delay(7500)
  .css('visibility', 'visible')
  .animate({ opacity: 1 }, 2550);

$('.scene-1 img')
  .delay(10000)
  .css('visibility', 'visible')
  .animate({ opacity: 1 }, 2050, function () {
    $('.scene-1').addClass('done').fadeOut(1500);
    $('video').fadeOut(1500);
  });
  $('.scene-1').delay(12000).fadeTo(1000, 0, function(){
    scene2();

  });

  // scene2();
// END SCENE-1

// START SCENE-2

function scene2() {
  $('.scene-2').delay(1500).fadeIn(1000);
  $('body').animate({ backgroundColor: '#0e0d0d' }, 1000);
  $('hr:eq(0), hr:eq(1)').delay(1550).animate({ opacity: 1 }, 1000);

  $(window).on('scroll', function () {
    let deltaPos = $(window).scrollTop();

    if (deltaPos >= 600) {
      $('hr:eq(2)').animate({ opacity: 1 }, 1000);
      $('.luther:eq(0)').animate({ opacity: 1 }, 1000);
    }
    if (deltaPos >= 1120) {
      $(' hr:eq(3)').animate({ opacity: 1 }, 1000);
      $('.luther:eq(1)').animate({ opacity: 1 }, 1000);
    }
    if (deltaPos >= 1580) {
      $('hr:eq(4)').animate({ opacity: 1 }, 1000);
      $('.luther:eq(2)').animate({ opacity: 1 }, 1000);
    }
    if (deltaPos >= 2000) {
      $('hr:eq(5)').animate({ opacity: 1 }, 1000);
      $('.luther:eq(3)').animate({ opacity: 1 }, 1000);
    }
    if (deltaPos >= 2700) {
      $('hr:eq(6)').animate({ opacity: 1 }, 1000);
      $('.luther:eq(4)').animate({ opacity: 1 }, 1000);
    }
    if (deltaPos >= 3100) {
      $('hr:eq(7)').animate({ opacity: 1 }, 1000);
      $('.luther:eq(5)').animate({ opacity: 1 }, 1000);
    }
    if (deltaPos >= 3440) {
      $('hr:eq(8)').animate({ opacity: 1 }, 1000);
      $('.luther:eq(6)').animate({ opacity: 1 }, 1000);
    }
    if (deltaPos >= 4300) {
      $('hr:eq(9)').animate({ opacity: 1 }, 1000);
      $('.luther:eq(7)').animate({ opacity: 1 }, 1000);
    }
    if (deltaPos >= 4350) {
      $('footer').show(400).animate({ opacity: 1 }, 800);
    }
  });
}
