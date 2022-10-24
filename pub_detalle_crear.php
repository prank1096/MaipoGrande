<?php 
include_once 'db.php';
require 'config.php';
require 'conexion.php';

if(isset($_POST['pub_detalle_crear'])){   

        $cantidad = trim($_POST['cantidad']);
        $id_producto= trim($_POST['id_producto']);
        $estado = 1;

        $maxQuery = "SELECT MAX(id_publicacion) FROM publicacion";
        $result = mysqli_query($conexion, $maxQuery);
        $row = mysqli_fetch_assoc($result);
    

        $inserción_publicación_detalle = "INSERT INTO publicaciondetalle(
                                              id_producto, 
                                              pubdet_cantidad,
                                              pubdet_estado,
                                              id_publicacion)
                                          VALUES ('$id_producto','$cantidad','$estado', '{$row['MAX(id_publicacion)']}')";

	    $resultado = mysqli_query($conexion,$inserción_publicación_detalle);


        if ($resultado) {
	    	header("Location: http://localhost/MaipoGrande/pub_detalle.php");
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }
?>
    