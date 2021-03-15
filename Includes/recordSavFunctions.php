<?php
    include_once('./dbsConnector.php');
    // header("Location: ./stopWatchPage.php");

    if(isset($_POST['SavRec'])){
        saveData($dtbs);
    }

    function saveData($dtbs){
        $cIdFetch = $dtbs->query("select C_id from coder where C_handle='".$_SESSION['userHandle']."'");
        while($row = $cIdFetch->fetch_assoc()){
            $cId = $row["C_id"];
        }
        $pName = test_input($_POST['pName']);
        $pTimeHour = test_input($_POST['pTimeHour']);
        $pTimeMinute = test_input($_POST['pTimeMinute']);
        $pTimeSecond = test_input($_POST['pTimeSecond']);
        $pType = test_input($_POST['pType']);
        $pDificulty = test_input($_POST['pDifficulty']) ;
        $pJudge =test_input($_POST['pJudge']) ;
        $pTries = test_input($_POST['pTries']) ;
        $pLink = test_input($_POST['pLink']) ;

        //sql pathanor aage check korte hobe
            //password r confirm password same ache kina
            //username uniqe kina
            //email valid kina
        $sql = "insert into records(C_id,P_name,P_time_hour,P_time_minute,P_time_second,P_Type,P_difficulty,P_judge,P_tries,P_link)  values(".$cId.", '".$pName."', '".$pTimeHour."', '".$pTimeMinute."', '".$pTimeSecond."', '".$pType."', '".$pDificulty."', '".$pJudge."', ".$pTries.", '".$pLink."')";
        // echo $sql;
        if ($dtbs->query($sql) == TRUE) {
            echo "<script>alert('Record Saved Successfuly');location.href = './index.php'</script>";
        } else {
            echo "<script>alert('Error inserting value : " . $dtbs->error."')</script>";
        }
    }
?>