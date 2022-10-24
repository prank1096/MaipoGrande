<?php 
include_once 'db.php';
require 'config.php';
require 'conexion.php';

session_start();
echo "<pre>";
var_dump($_SESSION);
echo "</pre>";

$query = "SELECT * FROM producto";


$resultado = mysqli_query($conexion, $query);


if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  echo $username;
  echo $password;
  $query = "select * from usuario where usu_login = '$username' and usu_contrasena ='$password'";
  $result = mysqli_query($conexion, $query);

  $userdetails = mysqli_fetch_assoc($result);

  if($userdetails['id_tipousuario']=='1' )
  {
      header('Location: publcacion.php');
  }
  else{

      header('Location: login.php');
      
  }
}
?>



<?php  
include 'includes/header.php';  
?>
    <!-- END nav -->

    <section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image: url(images/bg_1.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-md-12 ftco-animate text-center">
	              <h1 class="mb-2">Al Servicio de los Vegetales frescos &amp; Frutas</h1>
	              <h2 class="subheading mb-4">Todo Fresco y saludable &amp; Frutas</h2>
	              <p><a href="#" class="btn btn-primary">Más Información</a></p>
	            </div>

	          </div>
	        </div>
	      </div>
		  
		  <div class="slider-item" style="background-image: url(images/bg_4.jpeg);">
			<div class="overlay"></div>
		  <div class="container">
			<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

			  <div class="col-md-12 ftco-animate text-center">
				<h1 class="mb-2">Desde Maipo Grande Para el Mundo &amp; Maipo</h1>
				<h2 class="subheading mb-4">Lo mejor de lo mejor &amp; Maipo</h2>
				<p><a href="#" class="btn btn-primary">Más Información</a></p>
			  </div>

			</div>
		  </div>
		</div>

	      <div class="slider-item" style="background-image: url(images/bg_2.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-sm-12 ftco-animate text-center">
	              <h1 class="mb-2">100% Fresco &amp; Comida Organica</h1>
	              <h2 class="subheading mb-4">Brindamos Vegetales organicos &amp; Frutas</h2>
	              <p><a href="#" class="btn btn-primary">Más Información</a></p>
	            </div>

	          </div>
	        </div>
	      </div>
	    </div>
    </section>

    <section class="ftco-section">
			<div class="container">
				<div class="row no-gutters ftco-services">
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-shipped"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Envio Gratis</h3>
                <span>Sobre $100.000 CLP</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Siempre Fresco</h3>
                <span>Producto Empaquetado</span>
              </div>
            </div>    
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-award"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Alta Calidad</h3>
                <span>Brindamos seguridad y calidad en nuestros productos</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Soporte</h3>
                <span>Soporte las 24Hrs</span>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>

		<section class="ftco-section ftco-category ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 order-md-last align-items-stretch d-flex">
								<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(images/category.jpg);">
									<div class="text text-center">
										<h2>Vegetables</h2>
										<p>Asegurando la salud dentro del hogar</p>
										<p><a href="shop.php" class="btn btn-primary">Compra YA</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/category-2.jpg);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#">Frutas</a></h2>
									</div>
								</div>
								<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/bg_2.jpg);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#">Vegetales</a></h2>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/vege01.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Vegetales</a></h2>
							</div>		
						</div>
						<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/bg_5.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Frutas</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Presentando Productos...</span>
            <h2 class="mb-4">Productos</h2>
            <p> Productos de locales de alto prestigio a la venta de nuestros mejores clientes </p>
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">
			<?php while($producto = mysqli_fetch_assoc($resultado)): 		?>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="product-single.php?id=<?php echo $producto['id_producto']; ?>" class="img-prod"><img class="img-fluid"   src="images/imagenesDB/<?php echo $producto ['pro_imagen'];	 ?>" alt="Colorlib Template">
    					
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="product-single.php?id=<?php echo $producto['id_producto']; ?>"><?php echo $producto['pro_nombre']; ?></a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="price-sale">$<?php echo $producto['pro_precio']; ?></span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    	
            
			<?php	endwhile; ?>
    </section>
		
		<section class="ftco-section img" style="background-image: url(images/bg_3.jpg);">
			<div class="container">
				<div class="row justify-content-end">
          <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
			<span class="subheading">Los mejores precios aqui en MaipoGrande</span>
					
						</div>
          </div>
        </div>   		
    	</div>
    </section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	<span class="subheading">Testimonios</span>
            <h2 class="mb-4">Lo que dicen nuestros usuarios</h2>
            <p>demostrando nuestra garantia y feedback sobre nuestro sitio web 100% garantia de la venta y compra de frutas y verduras</p>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/bg_6.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Una de las mejores paginas en donde se puedan vender y comprar productos en chile genial MAIPOGRANDE.</p>
                    <p class="name">Arturo Guerrero</p>
                    <span class="position">Vega Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/bg_7.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Una de las pocas paginas el cual he visitado y he podido el poder de disfrutar las mejores frutas y verduras 10/10.</p>
                    <p class="name">Gustavo Becerra</p>
                    <span class="position">Morande's Show</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/bg_8.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Genial el sitio web MaipGrande uno de los sitios con mayor distincion el cual pueda distribuir mis productos.</p>
                    <p class="name">Luciana Dominguez</p>
                    <span class="position">Productor</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/bg_9.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Genial la pagina mas grande de chile MaipoGrande gracias a ella he podido llegar a mas partes del mundo con mis productos.</p>
                    <p class="name">Juan Vega</p>
                    <span class="position">Productor</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/bg_10.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Gracias a este sitio web he podido comprar productos estando en el extranjero muy grata experiencia de compra!.</p>
                    <p class="name">Alfons Hakimi</p>
                    <span class="position">Cliente</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <hr>

		<section class="ftco-section ftco-partner">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="images/a_1.jpg" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="images/a_2.jpg" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="images/a_3.jpg" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="images/bg_11.jpg" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="images/bg_12.jpg" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    		</div>
    	</div>
    </section>

		
	<?php  
include 'includes/footer.php';  
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
    
  </body>
</html>