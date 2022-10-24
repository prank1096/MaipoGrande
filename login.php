
<?php 
include_once 'db.php';
require 'config.php';
require 'conexion.php';



session_start();

?>

<?php  
include 'includes/header.php';  
?>
<div class="container">
    <div class="card card-container">
  
        
        <br>
        <div class="result">
            <?php
            if (isset($_GET['empty'])){
                echo '<div class="alert alert-danger">Debe ingresar el nombre de usuario</div>';
            }elseif (isset($_GET['loginE'])){
                echo '<div class="alert alert-danger">Nombre de usuario o contraseña incorrectos!</div>';
            } ?>
        </div>
        <form class="form-signin" data-toggle="validator" action="validar.php" method="post">
            <div class="row">
                <div class="form-group col-lg-12">
                    <label>Nombre de Usuario</label>
                    <input type="text" name="email" class="form-control" placeholder="usuario" required
                           data-error="Debe ingresar el nombre de usuario">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-lg-12">
                    <label>Contraseña</label>
                    <input type="password" name="password" class="form-control" placeholder="*******" required
                           data-error="Debe ingresar la contraseña">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

            <button class="btn btn-lg btn-success btn-block btn-signin" type="submit" name="login">Entrar</button>

        </form><!-- /form -->
    </div><!-- /card-container -->
</div><!-- /container -->






   

 
       
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