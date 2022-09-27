<?php 
include_once 'db.php';
require 'config.php';
require 'conexion.php';

if (isset($_POST['registrar'])) {
    if (strlen($_POST['user']) >= 1 && strlen($_POST['password']) >= 1 ) {
	    $user = trim($_POST['user']);
        $password = trim($_POST['password']);
	    $correo = trim($_POST['correo']);
        $pais = trim($_POST['pais']);
        $ciudad = trim($_POST['ciudad']);
        $direccion = trim($_POST['direccion']);
        $numerotele = trim($_POST['numerotele']);
        $rut = trim($_POST['rut']);
        $apellido = trim($_POST['apellido']);
        $nombre = trim($_POST['nombre']);
        $estado = 1;
        $tipouser = 1;
	  
	    $consulta = "INSERT INTO usuario(usu_nombre, usu_apellido, usu_contrasena, usu_login, usu_rut, usu_numero, usu_direccion, usu_ciudad, usu_pais, usu_correo, usu_estado, id_tipousuario) 
        
        VALUES ('$nombre','$apellido','$password','$user','$rut','$numerotele','$direccion','$ciudad','$pais','$correo','$estado','$tipouser')";
	    $resultado = mysqli_query($conexion,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has registrado correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}




?>