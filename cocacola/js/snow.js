$('video').hide();
document.querySelector('video').playbackRate = 1;


$('video').fadeIn(1000);

let intervalId = window.setInterval(function(){
    $('video').fadeOut(1000).fadeIn(500);
  }, 15000);
