// JavaScript Document
function do_counter() {
    var _date = new Date();
    _date.setMonth(08);
    _date.setDate(01);
    _date.setHours(0);
    _date.setMinutes(0);
    _date.setSeconds(0);
    $('.counter').countdown({
      startTime: _date,
      digitImages: 6,
      digitWidth: 53,
      digitHeight: 77,
      image: '../i/digits.png'
    });
};