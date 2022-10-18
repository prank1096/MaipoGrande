<?php 
  include_once 'db.php';
  require 'config.php';
  require 'conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MaipoGrande |  Chile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
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
    <link rel="stylesheet" href="scss/style.scss">
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
	          <li class="nav-item"><a href="blog.php" class="nav-link">Publicaciones</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contáctanos</a></li>
			  <li class="nav-item"><a href="login.php" class="nav-link">Inicio Sesion</a></li>
	          <li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
      <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}

.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}

 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0;

 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: green;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
 }
 form .button input:hover{
  background: linear-gradient(-135deg, #ade0b2, #6ed147);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}
      </style>
      <center>
        <div class="container">
            <br>
            <h2 class="color">Formulario Registro</h2>
            <br>
            <div class="content">
              <form action="registrar.php" method="post">
                <div class="user-details">
                  <div class="input-box">
                    <span class="details">Nombre</span>
                    <input name="nombre" type="text" placeholder="Nombre" autocomplete="off" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Apellido</span>
                    <input name="apellido" type="text" placeholder="Apellido" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Rut</span>
                    <input name="rut" type="text" placeholder="12.345.678-9" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Número Telefónico</span>
                    <input name="numerotele" type="number" placeholder="912345678" autocomplete="off" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Dirección</span>
                    <input name="direccion" type="text" placeholder="Mi dirección 3215, Torre 12 Departamento 18" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Correo</span>
                    <input name="correo" type="email" placeholder="tucorreo@gmail.com" autocomplete="off" required>
                  </div>
                  <div class="input-box">
                    <span class="details">País</span>
                    <input name="pais" type="text" placeholder="País" autocomplete="off" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Ciudad</span>
                    <input name="ciudad" type="text" placeholder="Ciudad" autocomplete="off" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Nombre de Usuario</span>
                    <input name="user" type="text" placeholder="Nombre de Usuario" autocomplete="off" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Contraseña</span>
                    <input name="password" type="password" placeholder="Contraseña" autocomplete="off" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Tipo de usuario</span>
                    <select name="tipousuario">
                      <option value="1">Cliente externo</option >
                      <option value="2">Comerciante local</option >
                      <option value="3">Productor</option >
                    </ui>
                  </div>
                  <div class="list">
                    <span class="psw">Tienes cuenta? <a href="login.php">Iniciar Sesión</a></span>
                  </div>
                <p><input href="login.php" type="submit" name="registrar" class="btn btn-primary py-2 px-3"></p>
                </div>
              </form>
            </div>
          </div>
        
        </body>
        </html>

