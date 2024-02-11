var today = new Date();
var tomorrow = new Date(today.getTime() + (24 * 60 * 60 * 1000));
monthA = 'января,февраля,марта,апреля,мая,июня,июля,августа,сентября,октября,ноября,декабря'.split(',');
document.getElementById("headerD").innerHTML = tomorrow.getUTCDate();
document.getElementById("headerM").innerHTML = monthA[tomorrow.getMonth()];

var al = Date.parse(new Date(tomorrow.getFullYear(),tomorrow.getMonth(),tomorrow.getUTCDate(),19,00));

function getTimeRemaining(endtime) {
  let t = al - Date.parse(new Date());
  let seconds = Math.floor((t / 1000) % 60);
  let minutes = Math.floor((t / 1000 / 60) % 60);
  let hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  let days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

// function initializeClock(id, endtime) {
//   let clock = document.getElementById(id);
//   let daysSpan = clock.querySelector('.days');
//   let hoursSpan = clock.querySelector('.hours');
//   let minutesSpan = clock.querySelector('.minutes');
//   let secondsSpan = clock.querySelector('.seconds');

//   function updateClock() {
//     var t = getTimeRemaining(endtime);

//     daysSpan.innerHTML = t.days;
//     daysSpan.innerHTML = ('0' + t.days).slice(-2);
//     hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
//     minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
//     secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

//     if (t.total <= 0) {
//       clearInterval(timeinterval);
//     }
//   }

//   updateClock();
//   var timeinterval = setInterval(updateClock, 1000);
// }

var deadline = tomorrow; // for endless timer
// initializeClock('timer', deadline);

//var deadline = new Date(Date.parse(new Date()) + 1 * 24 * 60 * 60 * 1000);


var date1 = new Date();
var date2 = new Date('12-10-2017');
var daysLag = Math.ceil(Math.abs(date2.getTime() - date1.getTime()) / (1000 * 3600 * 24));
