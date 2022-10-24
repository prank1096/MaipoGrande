<?php 
include_once 'db.php';
require 'config.php';
require 'conexion.php';

if (isset($_POST['newproduct'])) {
    if (strlen($_POST['cantidad']) >= 1  ) {
       
        $fechavenc = trim($_POST['fechavenc']);
        $fechaela = trim($_POST['fechaela']);
        $cantidad = trim($_POST['cantidad']);
        $nombre = trim($_POST['nombre']);
        $estado = 1;
        $opcion= trim($_POST['opcion']);
        $imagen = $_FILES['imagen'];
        $precio= trim($_POST['precio']);
        

        date_default_timezone_set("America/Santiago");
        $fec_subida = date("Y-m-d H:i:s");

        //seleccionando carpeta donde guardar imagen
        $carpetaimagen= 'images/imagenesDB/';

        //GENERAR NOMBRE UNICO PARA IMAGEN
        $nombreimagen=md5(uniqid(rand(), true) ). ".jpg";

        //SUBIR LA IMAGEN 

        move_uploaded_file($imagen['tmp_name'], $carpetaimagen . $nombreimagen);



        
        $consulta = "INSERT INTO producto(pro_nombre, 
                                        pro_cantidad,pro_fec_elaboracion, pro_fec_vencimiento,pro_precio, pro_imagen,pro_estado, id_tipoproduc) 
        
        VALUES ('$nombre','$cantidad','$fechaela','$fechavenc','$precio','$nombreimagen','$estado','$opcion')";
	    $resultado = mysqli_query($conexion,$consulta);

     
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Ha ingresado correctamente el producto!</h3>
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