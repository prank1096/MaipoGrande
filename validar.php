<?php 


$usuario = $_POST['usuario'];
$contraseña= $_POST['password'];
session_start();
$_SESSION['usuario']= $usuario;
$consulta= "SELECT * FROM usuario where usu_login = '$usuario' and usu_contrasena = '$contraseña'";
include('db.php');
$resultado= mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas){
  header("location: index.php");
}
else{
  ?>
  <?php
  include("login.php");
  ?>
  <h1 class="bad">
      error en la autenticacion
  </h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);

