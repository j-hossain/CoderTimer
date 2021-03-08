<!-- including the header -->
<?php
    include('./Includes/header.php');
?>
<!-- end of registration code -->
    <div class="formBox" id="regBox">
        <!-- <form action="./register.php" method="post">emne error handle kora jhamela , tai same page ei rakhbo -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <input class="inputBox" type="text" id="regHandleInp" name="regHandle" placeholder="Enter a unique handdle...."></br></br>
            <input class="inputBox" type="text" id="regNameInp" name="regName" placeholder="Enter your Full Name"></br></br>
            <input class="inputBox" type="email" id="regEmailInp" name="regMail" placeholder="Enter a valid Email"></br></br>
            <input class="inputBox" type="password" id="regPasswordInp" name="regPass" placeholder="Enter a password of (8-14) digits" ></br></br>
            <input class="inputBox" type="password" id="regPasswordConfirmInp" name="regPassCon" placeholder="Retype the password"></br></br>
            <input class="linkBtn" type="submit" name="regSubmit" value="REGISTER">
        </form>
        <p>Alreay a user ? <a href="./coderLogin.php">Login here</a></p>
    </div>
    <?php
    
        // <!-- including the code for registration -->
        include('./registerFunctions.php');
    ?>
    <script src="./js/main.js"></script>
</body>
</html>