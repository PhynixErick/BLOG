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
        <h2>Registro</h2>
        <hr>
        <form id="registro-form" action="" method="POST">
        <section>
        </section>
            <fieldset class="datos personales">
                <legend>Datos Personales</legend>
                <div id="registro-1">
                    <div class="reg-1">
                        <label for="re1">Nombre (s):</label>
                        <input id="re1" type="text" class="inp-text" placeholder="Nombre (s)"> 
                    </div>
                    <div class="reg-1">
                        <label for="re2">Apellido Paterno:</label>
                        <input id="re2" type="text" class="inp-text" placeholder="Apellido Paterno"> 
                    </div>
                    <div class="reg-1">
                            <label for="re3">Apellido Materno:</label>
                            <input id="re3" type="text" class="inp-text" placeholder="Apellido Paterno">
                    </div>
                </div>
                <div id="registro-3">
                    <div class="reg-1">
                        <label for="re7">Fecha de Nacimiento:</label>
                        <input id="re7" type="text" class="inp-text" placeholder="Fecha de nacimiento">
                    </div>
                    <div class="reg-1">
                        <label for="re8">Curp</label>
                        <input id="re8" type="text" class="inp-text" placeholder="Curp">
                    </div>
                    <div class="reg-1">
                        <label for="re9">Genero:</label>
                        <input id="re9" type="text" class="inp-text" placeholder="Genero">
                    </div>
                    <div class="reg-1">
                        <label for="re10">Tipo de sangre:</label>
                        <input id="re10" type="text" class="inp-text" placeholder="Tipo de sangre">
                    </div>
                </div>
            </fieldset>  
            <fieldset class="datos contacto">
                <legend>Datos de Contacto</legend>
                <div id="registro-2">
                    <div class="reg-1">
                        <label for="re6">Estado: </label>
                        <input id="re6" type="text" class="inp-text" placeholder="Estado">
                    </div>
                    <div class="reg-1">
                        <label for="re4">Direccion:</label>
                        <input id="re4" type="text" class="inp-text" placeholder="Direccion">
                    </div>
                    <div class="reg-1">
                        <label for="re5">Colonia:</label>
                        <input id="re5" type="text" class="inp-text" placeholder="Colonia">
                    </div>
                </div>
            </fieldset>
            <!-- <section class="datos contacto"> 
                <h3>Datos de contacto</h3>
                <div id="registro-2">
                    <div class="reg-1">
                        <label for="re6">Estado: </label>
                        <input id="re6" type="text" class="inp-text" placeholder="Estado">
                    </div>
                    <div class="reg-1">
                        <label for="re4">Direccion:</label>
                        <input id="re4" type="text" class="inp-text" placeholder="Direccion">
                    </div>
                    <div class="reg-1">
                        <label for="re5">Colonia:</label>
                        <input id="re5" type="text" class="inp-text" placeholder="Colonia">
                    </div>
                </div>
            </section> -->

             <button type="submit" class="regis-btn">Registrar</button>
        </form>
     </div>
</body>
</html>