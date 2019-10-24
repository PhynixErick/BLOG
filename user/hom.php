<?php
    session_start();

    if(!isset($_SESSION["user_session"])){
         header("Location:../login.php");
    }
?>

<?php include ("../header.php"); ?>
    <body>
            <div class="head-bar">
            <div class="div" style="height: auto">
                    <a href="login.php"><i id="" class="fa fa-user" aria-hidden="" style=""></i></a>
                </div>
            </div>
           <div class="home-content">
            
            <div class="left-bar">

            </div>
            <div class="main-content">
                
            </div>

        </div>
    </body>
<?php include("../footer.php"); ?>