<!-- including the header -->
<?php
    include('./Includes/header.php');
?>
        <div id="stopWatchBody">
            <div class="timeBox">
                <span class="hourSpan biggerDigits">00</span>
                <span>:</span>
                <span class="minuteSpan biggerDigits">00</span>
                <span>:</span>
                <span class="secondSpan biggerDigits">00</span>
                <span class="miliSecondSpan">00</span>
            </div>
            <div class="timerButtonBox">
                <button class="linkBtn" onclick="startStopWatch()" id="timerStartBtn">Start</button>
                <button class="linkBtn" onclick="pauseStopWatch()" id="timerPauseBtn">Pause</button>
                <button class="linkBtn" onclick="startStopWatch()" id="timerResumeBtn">Resume</button>
                <a href="./saveRecord.php" class="linkBtn" id="timeSaveBtn">Done</a>
            </div>
        </div>
        
    <script src="./js/main.js"></script>
    <script src="./js/stopWatch.js"></script>
    </body>
</html>