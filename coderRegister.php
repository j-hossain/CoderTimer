<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoderTimer - Coder Registration</title>
</head>
<!-- including the code for registration -->
<?php
    include('./register.php');
?>
<!-- end of registration code -->
<body id="registrationPage">
    <div class="registrationBox">
        <!-- <form action="./register.php" method="post">emne error handle kora jhamela , tai same page ei rakhbo -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <input type="text" id="regHandleInp" name="regHandle" placeholder="Enter a unique handdle...."></br></br>
            <input type="text" id="regNameInp" name="regName" placeholder="Enter your Full Name"></br></br>
            <input type="email" id="regEmailInp" name="regMail" placeholder="Enter a valid Email"></br></br>
            <input type="password" id="regPasswordInp" name="regPass" placeholder="Enter a password of (8-14) digits" ></br></br>
            <input type="password" id="regPasswordConfirmInp" name="regPassCon" placeholder="Retype the password"></br></br>
            <input type="submit" name="regSubmit" value="REGISTER">
        </form>
        <p>Alreay a user ? <a href="index.php">Login here</a></p>
    </div>
</body>
</html>