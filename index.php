<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Coder Timer</title>
</head>

<!-- includeing the login functions -->
<?php
    include('./login.php');
?>

<body id="loginPage">
    <div class="loginBox">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <input type="text" name="lgnhandInp" placeholder="Enter your username"></br></br>
            <input type="password" name="lgnPassInp" placeholder="Enter your password"></br></br>
            <input type="submit" value="lOGIN" name="logSubmit"></br></br>
            <p>Don't have a account ? <a href="coderRegister.php">Register</a></p>
        </form>
    </div>
</body>
</html>