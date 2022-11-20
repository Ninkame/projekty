let image = document.getElementsByClassName('slide');
let currentSlide = 1;
let timer = setInterval(function () {
  currentSlide++;
  slides(currentSlide);
}, 3000);
// Setup first image
slides(currentSlide);

// Image count + or - slide
function nextSlide(n) {
  slides((currentSlide += n));
}

function slides(n) {
  if (n > image.length) {
    currentSlide = 1;
  }
  if (n < 1) {
    currentSlide = image.length;
  }
  for (let i = 0; i < image.length; i++) {
    image[i].style.display = 'none';
  }
  image[currentSlide - 1].style.display = 'block';
}
