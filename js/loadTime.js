var url = window.location.search;
console.log(url);

var withParams = new URLSearchParams(url);

var hour = withParams.get('hour');
var minute = withParams.get('minute');
var second = withParams.get('second');

document.querySelector("#pTimeHour").value  =hour;
document.querySelector("#pTimeMinute").value  =minute;
document.querySelector("#pTimeSecond").value  =second;

document.querySelector(".hourSpan").innerHTML  =hour;
document.querySelector(".minuteSpan").innerHTML  =minute;
document.querySelector(".secondSpan").innerHTML  =second;