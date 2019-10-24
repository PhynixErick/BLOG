<?php
include 'menu.php';
include '../header_admin.php';

session_start();

    if(!isset($_SESSION["user_session"])){
         header("Location:../login.php");
    }
?>


<body>
    <div id="divp">
        <div class="titulo_welcome">
            <h3 class="welcome">Bienvenido: Erick Vázquez</h3>
        </div>

        <div class ="other">
            
        </div>
    </div>
</body>
</html>