var clockTime = document.getElementById('clockTime');
var clockDate  = document.getElementById('clockDate');

function hexoClock() {
    var time = new Date();
    var h = (time.getHours() % 24).toString();
    var m = time.getMinutes().toString();
    var s = time.getSeconds().toString();

    if (h.length < 2) h = '0' + h;
    if (m.length < 2) m = '0' + m;
    if (s.length < 2) s = '0' + s;

    var clockString = h + ':' + m + ':' + s;
    var colorString = 'q' + h + m + s;

    if(clockTime) clockTime.textContent = clockString;
}
hexoClock();
setInterval(hexoClock, 1000);

function renderTime(){
    var mydate = new Date();
    var year = mydate.getFullYear();
    if( year < 1000 ) year +=1900

    var day        = mydate.getDay();
    var month      = mydate.getMonth();
    var daym       = mydate.getDate();
    var dayarray   = new Array("Monday,","Tuesday,", "Wednesday,", "Thursday,", "Friday,", "Saturday,", "Sunday,");
    var montharray = new Array("January", "Febraury", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

    if(clockDate){
        clockDate.textContent = "" + dayarray[day] + " " + daym + " " + montharray[month] + " " + year ;
        clockDate.innerText="" + dayarray[day] + " " + daym + " " +  montharray[month] + " " + year ;
        setTimeout("renderTime()", 1000);
    }
}
renderTime();
