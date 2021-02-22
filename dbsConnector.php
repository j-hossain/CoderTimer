<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $DB = "codertimerdtbs";

    $dtbs = new mysqli($servername,$username,$password,$DB);
    // Check connection
    if ($dtbs->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    // function dataSend($sql){
    //     $result = $dtbs->query($sql);
    //     // if($result="TRUE")
    //     return $result;
    // }
?>