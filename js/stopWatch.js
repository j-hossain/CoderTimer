
var timeNow = {
    hour: 0,
    minute: 0,
    second: 0,
    miliSecond: 0
}

var hourSpan = document.querySelector(".hourSpan");
var minuteSpan = document.querySelector(".minuteSpan");
var secondSpan = document.querySelector(".secondSpan");
var miliSecondSpan = document.querySelector(".miliSecondSpan");
var intervalHandler;

function startStopWatch(){

    intervalHandler = setInterval(increaseTime,10);
}

function pauseStopWatch(){
    clearInterval(intervalHandler);
}

function increaseTime(){
    timeNow.hour = parseInt(hourSpan.innerHTML);
    timeNow.minute = parseInt(minuteSpan.innerHTML);
    timeNow.second = parseInt(secondSpan.innerHTML);
    timeNow.miliSecond = parseInt(miliSecondSpan.innerHTML);

    timeNow.miliSecond++;
    if(timeNow.miliSecond==100){
        timeNow.miliSecond = 0;
        timeNow.second++;
        if(timeNow.second==60){
            timeNow.second=0;
            timeNow.minute++;
            if(timeNow.minute==60){
                timeNow.minute=0;
                timeNow.hour++;
            }
        }
    }
    hourSpan.innerHTML = timeNow.hour;
    minuteSpan.innerHTML = timeNow.minute;
    secondSpan.innerHTML = timeNow.second;
    miliSecondSpan.innerHTML = timeNow.miliSecond;
}