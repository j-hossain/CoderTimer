<?php
include('./Includes/header.php');
include('./dbsConnector.php');
?>

<div id="profilePage">
    <div class="profileInfo">
        <div class="profileImage">
            <img src="./images/california-1751455_1920.jpg" alt="">
        </div>
        <div class="profileName">
            <span><?php echo $_SESSION['userHandle'] ?></span>
            <a href="updateProfile.php" class="linkBtn">Update Profile</a>
        </div>
    </div>

    <div class="allRecords">
        <div class="container">
            <div class="title">Records</div>
            <div class="recordTable">
                <div class="columnTitles">
                    <div class="rowContainer">
                        <span class="columnName">Problem</span>
                        <span class="columnName">Time Taken</span>
                    </div>
                </div>
                <?php
                     loadRecords("","",$dtbs);
                     function loadRecords($srch, $colName,$dtbs){
                        if($srch==""){
                            $result = $dtbs->query("select * from records,coder where coder.C_id=records.C_id and coder.C_handle = '".$_SESSION['userHandle']."'");
                        }

                        while($row = $result->fetch_assoc()){
                            $recordId = $row["R_id"];
                            $prbName = $row["P_name"];
                            $hour = $row["p_time_hour"];
                            $minute = $row["p_time_minute"];
                            $second = $row["p_time_second"];
                            echo '<div class="rowContainer">
                                    <a href="./recordDetails.php?rId='.$recordId.'">'.$prbName.'</a>
                                    <div class="timeBox">
                                        <span class="hourSpan ">'.$hour.'</span>
                                        <span>:</span>
                                        <span class="minuteSpan ">'.$minute.'</span>
                                        <span>:</span>
                                        <span class="secondSpan ">'.$second.'</span>
                                    </div>
                                </div>
                                ';
                        }
                     }   

                ?>
                
            </div>
        </div>
    </div>
</div>
</body>
</html>