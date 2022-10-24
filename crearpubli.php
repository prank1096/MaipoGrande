<?php  
include 'includes/headermenus.php';  
include_once 'db.php';
require 'config.php';
require 'conexion.php';

//consulta para obtener los tipos de productos
$consulta = "SELECT * FROM tipoproducto";
$resultado = mysqli_query($conexion, $consulta);
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.ola {
  background-color: Green;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 13px;
  cursor: pointer;
}

.ola:hover {
  background-color: #EEEDED;
}

.poto {border-radius: 12px;}

input[type=button], input[type=submit], input[type=reset] {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
.button5 {border-radius: 12px;}

</style>  
  <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          </div>
        </div>
      </div>
    </div>
    <center>
        <div class="container">
          <br>
          <h2 class="color" style="font-family:verdana;">Crea el nombre y descripción de tu publicación!</h2>
          <br>
        <div class="container">
          <form action="pub_crear.php" method="post" enctype="multipart/form-data" >
              <label for="fname">Nombre de la Publicación</label>
              <input type="text" id="pubnombre" name="pubnombre" placeholder="MaipoGrande te necesita!..">
              <label for="lname">Descripción</label>
              <input type="text" id="pubndesc" name="pubndesc" placeholder="Nos encontramos en la búsqueda de..">
              <p for="lname">Seleccione una imágen<p>
              <input name="pubimagen" id="pubimagen"type="file" accept="image/jpeg,image/png,image/jpg" required>
              <br>
              <br>
              <br>
              <input type="submit" name="pub_crear" class="button5" value="Crear Publicación">
          </form>
        </div>
        </body>
        </html>   


<?php
include 'includes/footermenus.php';
?>
