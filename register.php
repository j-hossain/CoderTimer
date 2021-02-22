<?php
    $handle =  $_POST['handleInp'];
    
    echo '<script language="javascript">';
    echo 'alert("message successfully sent")';
    echo '</script>';
    //code to redirect to previous page
    if($handle == "goBack"){
        // header("location:javascript://history.go(-1)");//it eorks perfect, but i nee to send errors too
        // exit(); eta na dileo problem hoy na
        //header('Location: ' . $_SERVER['HTTP_REFERER']); eta redirect er motoi kaajkore, input er value gula r thake na
    }
    
    //code to redirect to a page
    // if($handle == "redirectMe"){
    //     header("Location: ./coderRegister.php");
    //     exit();
    // }
?>