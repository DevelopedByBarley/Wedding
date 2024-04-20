// Cél dátum létrehozása
var targetDate = new Date("2024-08-31T17:30:00").getTime();

// Visszaszámláló frissítése minden másodpercben
setInterval(function () {

  // Jelenlegi dátum és idő lekérése
  let now = new Date().getTime();

  // A cél dátum és az aktuális dátum közötti különbség
  let difference = targetDate - now;

  let dayInMilliseconds = 1000 * 60 * 60 * 24;
  let hourInMilliseconds = 1000 * 60 * 60;
  let minuteInMilliseconds = 1000 * 60;
  let secondInMilliseconds = 1000;



  let days = Math.floor(difference / dayInMilliseconds);
  let hours = Math.floor((difference % dayInMilliseconds) / hourInMilliseconds);
  let minutes = Math.floor((difference % hourInMilliseconds) / minuteInMilliseconds);
  let seconds = Math.floor((difference % minuteInMilliseconds) / secondInMilliseconds);


  document.getElementById('days').innerHTML = days.toString().length === 1 ? '0' + days : days;
  document.getElementById('hours').innerHTML = hours.toString().length === 1 ? '0' + hours : hours;

  document.getElementById('minutes').innerHTML = minutes.toString().length === 1 ? '0' + minutes : minutes;
  document.getElementById('seconds').innerHTML = seconds.toString().length === 1 ? '0' + seconds : seconds;


}, 1000); // 1000ms = 1 másodperc
