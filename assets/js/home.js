$(document).ready(function () {
  // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
  if (!String.prototype.trim) {
    (function () {
      // Make sure we trim BOM and NBSP
      var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
      String.prototype.trim = function () {
        return this.replace(rtrim, '');
      };
    })();
  }

  [].slice.call(document.querySelectorAll('input.input__field, textarea.input__field')).forEach(function (inputEl) {
    // in case the input is already filled..
    if (inputEl.value.trim() !== '') {
      classie.add(inputEl.parentNode, 'input--filled');
    }

    // events:
    inputEl.addEventListener('focus', onInputFocus);
    inputEl.addEventListener('blur', onInputBlur);
  });

  function onInputFocus(ev) {
    classie.add(ev.target.parentNode, 'input--filled');
  }

  function onInputBlur(ev) {
    if (ev.target.value.trim() === '') {
      classie.remove(ev.target.parentNode, 'input--filled');
    }
  }


  // nav-hide
  var scrollTop = 0;
  $(window).scroll(function () {
    scrollTop = $(window).scrollTop();
    $('.counter').html(scrollTop);

    if (scrollTop >= 100) {
      $('.nav').addClass('scrolled-nav');
      $('.nav').removeClass('nav--transparent');
      $('.logo').addClass('scroll--logo');
    } else if (scrollTop < 100) {
      $('.nav').removeClass('scrolled-nav');
      $('.nav').addClass('nav--transparent');
      $('.logo').removeClass('scroll--logo');
      $('.logo').addClass('uk-animation-right uk-animation-reverse');
    }

  });
  // end nav hide 

  // initialize slick.js
  $('.slick-slider').slick({
    dots: false,
    infinite: true,
    fade: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 3000
  });

 // datetimepicker js
 $('#modalTime').datetimepicker({
	datepicker:false,
	format:'H:i',
	step:5
});
$('#modalDate').datetimepicker({
	lang:'ch',
	timepicker:false,
	format:'m/d/Y',
	formatDate:'Y/m/d',
	minDate:'-2017/12/01', // yesterday is minimum date
	maxDate:'+2040/01/02' // and tommorow is maximum date calendar
});

});