// ------------------------------------------------------------------
//  Countdown
// ------------------------------------------------------------------
var countDate = new Date("May 15, 2023 00:00:00").getTime();
var f = setInterval(function(){
    var today = new Date().getTime();
    var distance = countDate - today;
    var days = Math.floor(distance/ (1000*60*60*24));
    var hours = Math.floor((distance % (1000*60*60*24))/ (1000*60*60));
    var minutes = Math.floor((distance % (1000*60*60))/ (1000*60));
    var seconds = Math.floor((distance % (1000*60))/1000);

    document.getElementById('days').innerHTML = days;
    document.getElementById('hours').innerHTML = hours;
    document.getElementById('minutes').innerHTML = minutes;
    document.getElementById('seconds').innerHTML = seconds;

},1000);

// ------------------------------------------------------------------
//  Footer
// ------------------------------------------------------------------
const newyear = new Date().getFullYear();

document.getElementById('year').innerHTML = newyear;

var loader = document.getElementById('pre-Loader');
window.addEventListener("load",function(){
    loader.style.display = "none";
});
