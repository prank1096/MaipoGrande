<?php 
require 'validar.php';



function estaAutenticado() : bool {
    session_start();

    $filas = $_SESSION['login'];
    if($filas){
        return true;
    }
    return false;

}


?>