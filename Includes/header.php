<?php
    if(!isset($_SESSION)){
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/loginPage.css">
    <link rel="stylesheet" href="./css/stopWatchPage.css">
    <!-- <script type="text/javascript" src="./js/main.js"></script> -->
    <title>Welcome - Coder Timer</title>
</head>
<body>
  

<div class="container">
  <div id="navBar">
      <div class="logoDiv">
          <a href="./index.php"><img src="./images/coderTimerLogo.png"   alt=""></a>
      </div>
      <div class="menuDiv">
          <ul class="menuItems">
              <?php
                if(isset($_SESSION['logState'])){
                    if($_SESSION['logState']){
                        echo 
                        '<li class="menuItem"><a href="./profilePage.php" class="menuLink" >My Profile</a></li>';
                    }
                }
              ?>
              
              <li class="menuItem"><a href="./StopWatchPage.php" class="menuLink">Solve a problem</a></li>
              <li class="menuItem"><a href="#" class="menuLink">Search</a></li>
          </ul>
      </div>
      <div class="buttonsDiv">
          
              <?php
                if(isset($_SESSION['logState'])){
                    if($_SESSION['logState']){
                        echo 
                        '<a href="logOut.php" class="linkBtn" id="lgtBtn">Logout</a>';
                    }
                }
                else{
                    echo 
                    '<a href="./coderLogin.php" class="linkBtn" id="lgnBtn">Login</a>
                    <a href="./coderRegister.php" class="linkBtn" id="regBtn">Register</a>';
                }
              ?>
      </div>
  </div>
</div>