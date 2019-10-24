<?php
include 'menu.php';
include '../header_admin.php';
session_start();

    if(!isset($_SESSION["user_session"])){
         header("Location:../login.php");
    }
?>
<body>
<div id="divp" >
        <h2>Tabla Empleados</h2>
            <hr>

            <div class="div_tab">
                <table>
                    <tr>
                        <th>NOMBRE</th>
                        <th>APELLIDO PATERNO</th>
                        <th>APELLIDO MATERNO</th>
                        <th>DIRECCION</th>
                        <th>CODIGO POSTAL</th>
                        <th>FECHA DE NACIMIENTO</th>
                        <th>CURP</th>
                        <th>GENERO</th>
                        <th>TIPO DE SANGRE</th>
                    </tr>
                    <tr>
                        <td>ERICK MARK</td>
                        <td>RODAS</td>
                        <td>VAZQUEZ</td>
                        <td>RIO SUCHIATE</td>
                        <td>30798</td>
                        <td>23/05/1999</td>
                        <td>DGHGHLHKH646846DW</td>
                        <td>HOMBRE</td>
                        <td>O +</td>
                    </tr>
                    <tr>
                        <td>ERICK MARK</td>
                        <td>RODAS</td>
                        <td>VAZQUEZ</td>
                        <td>RIO SUCHIATE</td>
                        <td>30798</td>
                        <td>23/05/1999</td>
                        <td>DGHGHLHKH646846DW</td>
                        <td>HOMBRE</td>
                        <td>O +</td>
                    </tr>
                    <tr>
                        <td>ERICK MARK</td>
                        <td>RODAS</td>
                        <td>VAZQUEZ</td>
                        <td>RIO SUCHIATE</td>
                        <td>30798</td>
                        <td>23/05/1999</td>
                        <td>ROVE990523HCSDZR07</td>
                        <td>HOMBRE</td>
                        <td>O +</td>
                    </tr>
                </table>
            </div>
    </div>
</body>
</html>