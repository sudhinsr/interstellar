jQuery(document).ready(function($) {
  $(".l-main").hide().delay(1000).fadeTo(1000,1);
  $(".comet").delay(1000).animate({right:"0", top:"10%"}, 2000);
  do_counter();
  $('.bg-layer').parallax(
  {
    yparallax:'50px',
    xparallax:'50px',
    xorigin:0,
    yorigin:0
  }
  );
  var _date = new Date();
  _date.setMonth(08);
  _date.setDate(01);
  _date.setHours(0);
  _date.setMinutes(0);
  _date.setSeconds(0);
  $('.countdown').countdown({
    image:'../i/digits.png',
    startTime: _date,
    format:'ddd:hh:mm:ss'
  });
});

