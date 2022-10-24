<?php
 //include 'validar.php';
 
if(!isset($_SESSION)){
	session_start();
	
}



$usuarios = $_SESSION['usu_login'] ?? null;

$admin = $_SESSION['id_tipousuario'] ?? null;




?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MaipoGrande |  Chile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="path/to/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css%22%3E">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

	

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/formulario.css">
	<link rel="stylesheet" href="scss/style.scss">
	<link rel="stylesheet" href="scss/formulario.scss">

  </head>
  <body class="goto-here">
		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+56945217838</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">MaipoGrande@gmail.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text"> Compra Ya! &amp; Devolucion Gratis!</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Maipo Grande</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Inicio</a></li>
			  
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="shop.php">Comprar</a>
              	<a class="dropdown-item" href="wishlist.php">Listado</a>
                <a class="dropdown-item" href="product-single.php">Descripcion</a>
                <a class="dropdown-item" href="cart.php">Carro</a>
                <a class="dropdown-item" href="checkout.php">Caja</a>
              </div>
            </li>
	          <li class="nav-item"><a href="about.php" class="nav-link">Sobre Nosotros</a></li>
			  <?php if($usuarios=$usuarios): ?>
	          <li class="nav-item"><a href="publicacion.php" class="nav-link">Publicaciones</a></li>
			  <?php endif; ?>
			  <?php if($admin==2): ?>
	          <li class="nav-item"><a href="administra.php" class="nav-link">Administrador Productos</a></li>
			  <?php endif; ?>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contáctanos</a></li>
			

			<?php if($usuarios=$usuarios): ?>
			  <li class="nav-item"><a href="cerrarsesion.php" class="nav-link">cerrar sesion</a></li>
			  <?php endif; ?>

			  <?php if($usuarios==NULL): ?>
			  <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
			  <?php endif; ?>

	          <li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>
			  <?php if($usuarios=$usuarios): ?>
			  <li class="nav-item dropdown">

			  
			<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bienvenido <?php echo $_SESSION['usu_login'] ?? null ?></a>

				
				
				<div class="dropdown-menu" aria-labelledby="dropdown04">
					<a class="dropdown-item" href="shop.php">Mis Productos</a>
					<a class="dropdown-item" href="wishlist.php">Mis Pedidos</a>
				  <a class="dropdown-item" href="product-single.php">Configuración</a>
				  <a class="dropdown-item" href="cart.php">Salir</a>
				</div>
			  </li>
			  <?php endif; ?>
	        </ul>
	      </div>
	    </div>
	  </nav>
 