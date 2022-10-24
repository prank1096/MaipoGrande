<?php 
include_once 'db.php';
require 'config.php';
require 'conexion.php';


session_start();

if(isset($_POST['pub_crear']))
    {   

        $pubnombre = trim($_POST['pubnombre']);
        $pubndesc= trim($_POST['pubndesc']);
        $pubimagen = $_FILES['pubimagen'];

        $id_usuario = $_SESSION['id_usuario'];  // Estoy insertando el id_usuario en duro, ya que tienes que hacer lo de la sesión acá y mandarlo.
        
        date_default_timezone_set("America/Santiago");
        $pub_fec_creacion = date("Y-m-d H:i:s");
        $pub_fec_vencimiento = Date('d:m:y', strtotime("+30 days"));

        $carpetaimagen= 'images/imagenesDB/';

        $nombreimagen=md5(uniqid(rand(), true) ). ".jpg";

        $estado = 1;

        move_uploaded_file($pubimagen['tmp_name'], $carpetaimagen . $nombreimagen);

        $inserción_publicación = "INSERT INTO publicacion(
                                              id_usuario, 
                                              pub_nombre,
                                              pub_descripcion,
                                              pub_imagen,
                                              pub_fec_subida,
                                              pub_fec_venc,
                                              pub_estado) 
                                  VALUES ('$id_usuario','$pubnombre','$pubndesc','$nombreimagen','$pub_fec_creacion','$pub_fec_vencimiento','$estado')";

	    $resultado = mysqli_query($conexion,$inserción_publicación);

    

        if ($resultado) {
	    	header("Location: http://localhost/MaipoGrande/pub_detalle.php");
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }
?>
    