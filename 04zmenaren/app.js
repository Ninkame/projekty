const convert = $('#convert');
const result = $('#result');
const amount = $('#amount');
let from = $('#from');
let to = $('#to');
let clicked = 0;
$('.convert')
  .on('click', function () {
    clicked++;
    $(this).addClass('rotate');

    if (clicked == 1) {
      from.removeClass('backflip3').toggleClass('backflip');
      to.removeClass('backflip4').toggleClass('backflip2');

      to = $('#from');
      from = $('#to');
    }

    if (clicked >= 2) {
      from = $('#from');
      to = $('#to');

      from.removeClass('backflip').toggleClass('backflip3');
      to.removeClass('backflip2').toggleClass('backflip4');

      clicked = 0;
    }
  })
  .on('animationend', function () {
    $(this).removeClass('rotate');
  });

$('#amount, #from, #to').on(
  'animationend change keydown paste input',
  function () {
    let fromCurrency = from.val();
    let toCurrency = to.val();
    let amt = amount.val();
    fetch(`https://api.exchangerate-api.com/v4/latest/${fromCurrency}`)
      .then((response) => {
        return response.json();
      })
      .then((data) => {
        let rate = data.rates[toCurrency];
        let total = rate * amt;
        result.attr('placeholder', total.toFixed(3));
        $('#kurz').html('Kurz: ' + rate.toFixed(3));
      });
  }
);