<?php 
include_once 'db.php';
//require 'config.php';
//require 'conexion.php';


session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!$email && !$password) {
        header('Location:login.php');
    } else {
        $query = "SELECT * FROM usuario WHERE usu_login = '$email' AND usu_contrasena = '$password' ";
        $result = mysqli_query($conexion, $query);
        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
            $_SESSION['usu_login'] = $user['usu_login'];
            $_SESSION['id_usuario'] = $user['id_usuario'];
            $_SESSION['id_tipousuario'] = $user['id_tipousuario'];
            header('Location:index.php');
        } else {
            header('Location:login.php');
        }
    }
}
