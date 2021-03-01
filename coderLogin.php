<!-- including the header -->
<?php
    include('./Includes/header.php');
?>

<!-- includeing the login functions -->
<?php
    include('./loginFunctions.php');
?>

    <div class="loginBox">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <input type="text" name="lgnhandInp" placeholder="Enter your username"></br></br>
            <input type="password" name="lgnPassInp" placeholder="Enter your password"></br></br>
            <input type="submit" value="LOGIN" name="logSubmit"></br></br>
            <p>Don't have a account ? <a href="./coderRegister.php">Register</a></p>
        </form>
    </div>
</body>
</html>