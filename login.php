<?php
    include_once('./dbsConnector.php');

    if(isset($_POST['logSubmit'])){
        $handle = $_POST['lgnhandInp'];
        $password = $_POST['lgnPassInp'];

        $sql="select * from coder where C_handle='".$handle."'";
        $result = $dtbs->query($sql);

        $loginAccess = false;

        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                if($row["C_password"]==$password)
                    $loginAccess=true;
            }
        }

        if($loginAccess){
            echo "<script>alert('Login Successfull')</script>";
        }

        else{
            echo "<script>alert('Login Unsuccessfull')</script>";
        }
    }
?>