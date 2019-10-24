<?php
    include ("inc/connection.php");
    
    $sql="SELECT * FROM tbl_users WHERE user=:username AND password=:password";
    $result = $conexion->prepare($sql);
    $username = htmlentities(addslashes($_POST["username"]));     
    $password = htmlentities(addslashes($_POST["password"]));     
    if(empty($username) || empty($password)){
        $empty = true;

    }else{

        $result->bindValue(":username", $username);
        $result->bindValue(":password", $password);
        $result->execute();
        $no_regist = $result->rowCount();

            if($no_regist!=0){
                session_start();
                $_SESSION["user_session"] = $_POST["username"];
                header("location:user/home.php");
                    
            }else{
                $_SESSION["user_session"] = false;
                header("location:login.php");

            }
    }
?>
