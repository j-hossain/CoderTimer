<!-- including the header -->
<?php
    include('./Includes/header.php');
?>
<!-- end of registration code -->
    <div class="formBox" id="savRec">
        <div class="timeBox">
            <span class="hourSpan biggerDigits">00</span>
            <span>:</span>
            <span class="minuteSpan biggerDigits">00</span>
            <span>:</span>
            <span class="secondSpan biggerDigits">00</span>
        </div>
        <!-- <form action="./register.php" method="post">emne error handle kora jhamela , tai same page ei rakhbo -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <input class="inputBox" type="text" id="pName" name="pName" placeholder="Enter the full name of the problem...."></br></br>
            <input style="display: none;" class="inputBox"  id="pTimeHour" name="pTimeHour">
            <input style="display: none;" class="inputBox"  id="pTimeMinute" name="pTimeMinute">
            <input style="display: none;" class="inputBox"  id="pTimeSecond" name="pTimeSecond">
            <input class="inputBox" type="text" id="pType" name="pType" placeholder="What is the type of the problem"></br></br>
            <input class="inputBox" type="text" id="pDifficulty" name="pDifficulty" placeholder="Set a difficulty level between 100-3000"></br></br>
            <input class="inputBox" type="text" id="pJudge" name="pJudge" placeholder="Enter the name of the online judge" ></br></br>
            <input class="inputBox" type="text" id="pTries" name="pTries" placeholder="How many tries before accepted"></br></br>
            <input class="inputBox" type="text" id="pLink" name="pLink" placeholder="Paste the problem link here"></br></br>
            <input class="linkBtn" type="submit" name="SavRec" value="SAVE">
        </form>
    </div>
    <?php
        
        include('./Includes/recordSavFunctions.php');
    ?>
    <script src="./js/main.js"></script>
    <script src="./js/loadTime.js"></script>
</body>
</html>