<?php
try{
    $conexion = new PDO('mysql:host=localhost;dbname=blog_db', "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(Exception $e){
    die("Error: " . $e.getMesage());
}
?>