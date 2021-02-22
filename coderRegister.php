<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoderTimer - Coder Registration</title>
</head>
<body id="registrationPage">
    <div class="registrationBox">
        <form action="./register.php" method="post">
            <input type="text" name="handleInp" id="regHandle" placeholder="Enter a unique handdle....">
            <input type="text" name="nameInp" id="regName" placeholder="Enter your Full Name">
            <input type="email" name="emailInp" id="regMail" placeholder="Enter a valid Email">
            <input type="password" name="passwordInp" id="regPass" placeholder="Enter a password of (8-14) digits" >
            <input type="password" name="passwordConfirmInp" id="regPassCon" placeholder="Retype the password">
            <button type="submit" >REGISTER</button>
        </form>
        <p>Alreay a user ? <a href="index.php">Login here</a></p>
    </div>
</body>
</html>