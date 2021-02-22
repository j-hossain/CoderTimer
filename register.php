<?php
    include_once('./dbsConnector.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $handle = test_input($_POST['regHandle']);
        $fullName = test_input($_POST['regName']);
        $email = test_input($_POST['regMail']) ;
        $password =test_input($_POST['regPass']) ;
        $passwordCon = test_input($_POST['regPassCon']) ;
        $sql = "insert into coder(C_handle,C_name,C_password,C_mail) values('".$handle."', '".$fullName."', '".$password."', '".$email."')";
        // echo $sql;
        if ($dtbs->query($sql) == TRUE) {
            echo "<script>alert('registration success')</script>";
        } else {
            echo "<script>alert('Error inserting value : " . $dtbs->error."')</script>";
        }
    }
?>