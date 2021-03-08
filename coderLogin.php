<!-- including the header -->
<?php
    include('./Includes/header.php');
    
?>


    <div class="formBox" id="loginBox">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <input class="inputBox" type="text" name="lgnhandInp" placeholder="Enter your handle name"></br></br>
            <input class="inputBox" type="password" name="lgnPassInp" placeholder="Enter your password"></br></br>
            <input class="linkBtn" type="submit" value="LOGIN" name="logSubmit"></br></br>
            <p>Don't have a account ? <a href="./coderRegister.php">Register</a></p>
        </form>
    </div>
    <?php
    
    // <!-- includeing the login functions -->
    include('./loginFunctions.php');
    ?>
    
    <script src="./js/main.js"></script>
</body>
</html>


