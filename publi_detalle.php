<?php 
include_once 'db.php';
require 'config.php';
require 'conexion.php';

$id= $_GET['id'];
$id= filter_var($id, FILTER_VALIDATE_INT);

$n = 1;

$publicacion = "SELECT * FROM publicacion WHERE id_publicacion = ${id}";

$publicacion_resultado = mysqli_query($conexion, $publicacion);


$query = "SELECT * FROM publicacion a 
INNER JOIN publicaciondetalle b ON a.id_publicacion = b.id_publicacion
INNER JOIN producto p ON p.id_producto = b.id_producto
WHERE b.id_publicacion = ${id}";

$resultado = mysqli_query($conexion, $query);
// var_dump($id);
// var_dump($producto);;
// die;
?>

<?php  
include 'includes/header.php';  
?>
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

.center {
  margin-left: auto;
  margin-right: auto;
}
.button5 {border-radius: 12px;}

table {
  padding: 0.75rem;
  width: 100%;
  vertical-align: top;
  border-collapse: collapse;
  border-top: 1px solid #ebedf2;
  color: #212529;
  background-color: #666666 !important;
}

thead th:nth-child(1) {
  width: 20%;
}

thead th:nth-child(2) {
  width: 20%;
}

thead th:nth-child(3) {
  width: 15%;
}

thead th:nth-child(4) {
  width: 35%;
}

th{
  background-color: #FFFFFF;
  padding: 0.75rem;
  vertical-align: top;
  border-top: 1px solid #ebedf2;
  color: #212529;
  text-align: inherit;
}

td {
  background-color: #FFFFFF;
  padding: 0.75rem;
  vertical-align: top;
  border-top: 1px solid #ebedf2;
}

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


</style>

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h2 class="mb-0 bread">Publicación Detalle</h2>
          </div>
        </div>
      </div>
    </div>
    <?php while($publi = mysqli_fetch_assoc($publicacion_resultado)):?>
    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
			<div class="container">
				<div class="row">
					<div class="col-md-12 py-5 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section-bold mb-4 mt-md-5">
	          	<div class="ml-md-0">
		            <h2 class="mb-4"><?php echo $publi['pub_nombre']; ?></h2>
	            </div>
	          </div>
	          <div class="text-center">
              <?php echo $publi['pub_descripcion']; ?>
						</div>
					</div>
				</div>
			</div>
    </section>
      <?php endwhile; ?>
      <div class="container">
          <div class="col-md-12 py-5 wrap-about pb-md-5 ftco-animate text-center">
            <h2 class="text-center">Productos que se solicitan: </h2>
	        </div>
          <table>
              <tr>
            <th class="text-center">Nº</th>
                <th class="text-center">Nombre Producto</th>
                <th class="text-center">Cantidad</th>
              </tr>
            </thead>
              <tbody>
              <?php while($producto = mysqli_fetch_assoc($resultado)): 		?>
                <tr>
                    <td class="text-center"><?php echo $n++ ?></td>
                    <td class="text-center"><?php echo $producto['pro_nombre'] ?></td>
                    <td class="text-center"><?php echo $producto['pubdet_cantidad'] ?></td>
                    </td> 
                </tr>
              <?php endwhile; ?>
            </tbody>     
          </table>
      </div>
      <div class="text-center">
      <br>
      <br>
      <br>
      <br>
    <button href="Tienes que crear el php para ingresar los productos"  class="ola poto fa fa-plus">Ingresar mis productos</button>
</div>
<br>
<br>
<br>
        <!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <h2>Se solicita: </h2>
        <span class="close">&times;</span>
         
      </div>
      <div class="modal-body">
        <table id="customers">
        <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>

  
  <tr>
    <td>Berglunds snabbköp</td>
    <td>Christina Berglund</td>
    <td>Sweden</td>
  </tr>
          </table>
          <button href="formulario_local.php" class="btn btn-primary">Ingresar mis productos</button>
      </div>
      <div class="modal-footer">
        <h3 style="text-align: center;">Selecciones de prodcutos</h3>
      </div>
    </div>
  
  </div>
  
  <script>
  // Get the modal
  var modal = document.getElementById("myModal");
  
  // Get the button that opens the modal
  var btn = document.getElementById("myBtn");
  
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
  
  // When the user clicks the button, open the modal 
  btn.onclick = function() {
    modal.style.display = "block";
  }
  
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
  </script>

    <?php  
include 'includes/footermenus.php';  
?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    


  <style>
    body {font-family: Arial, Helvetica, sans-serif;}
    
    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 100px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }
    
    /* Modal Content */
    .modal-content {
      position: relative;
      background-color: #fefefe;
      margin: auto;
      padding: 0;
      border: 1px solid #888;
      width: 80%;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
      -webkit-animation-name: animatetop;
      -webkit-animation-duration: 0.4s;
      animation-name: animatetop;
      animation-duration: 0.4s
    }
    
    /* Add Animation */
    @-webkit-keyframes animatetop {
      from {top:-300px; opacity:0} 
      to {top:0; opacity:1}
    }
    
    @keyframes animatetop {
      from {top:-300px; opacity:0}
      to {top:0; opacity:1}
    }
    
    /* The Close Button */
    .close {
      color: white;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }
    
    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }
    
    .modal-header {
      padding: 2px 16px;
      background-color: #5cb85c;
      color: white;
      text-align: center;
    }
    
    .modal-body {padding: 2px 16px;}
    
    .modal-footer {
      padding: 2px 16px;
      background-color: #5cb85c;
      color: white;
      text-align: center;
    }
    </style>
  </body>



</html>