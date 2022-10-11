<?php  
include 'includes/header.php';  
include_once 'db.php';
require 'config.php';
require 'conexion.php';



//consulta para obtener los tipos de productos
$consulta = "SELECT * FROM tipoproducto";
$resultado = mysqli_query($conexion, $consulta);



?>


<main class="container">

    <h1 class="color">Productos</h1>
    <a href="administra.php" class="botoon"> Volver </a>
    <br>
    <br>
    <br>
    
   
      <center>
        <div class="container">
            <br>
            <h2 class="color">Agregando Productos</h2>
            <br>
            <div class="content">
              <form action="newproduct.php" method="POST"  enctype="multipart/form-data">
                <div class="user-details">
                  <div class="input-box">
                    <span class="details">Nombre del Producto</span>
                    <input name="nombre" type="text" placeholder="Manzana" autocomplete="off" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Cantidad</span>
                    <input name="cantidad" type="number" placeholder="1" required  min="1" && max="99">
                  </div>
                  <div class="input-box">
                    <span class="details">fecha de emision del producto</span>
                    <input name="fechaela" type="date" placeholder="9/10/2022" required>
                  </div>
                  <div class="input-box">
                  <span class="details">fecha de vencimiento del producto</span>
                    <input name="fechavenc" type="date" placeholder="9/10/2022"  required>
                  </div>
     
                  <div class="input-box">

                  <span class="details">Imagen del producto</span>
                    <input name="imagen" type="file" accept="image/jpeg, image/png,  image/jpg" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Tipo de producto</span>

                    <select class="input-box" name="opcion" >
                        <option value="" >-- Seleccione --</option>
                        <?php while($tipoproducto= mysqli_fetch_assoc($resultado) ): ?>

                          <option   value="<?php echo $tipoproducto ['id_tipoproduc']; ?>" >
                          <?php echo $tipoproducto ['tip_nombre'] ; ?>
                        </option>
                          <?php endwhile; ?>
                    </select>
                  </div>
                 
                    <br>
                    <br>
                    <br>

                </div>
                <p><input href="administra.php" type="submit" name="newproduct" value="Nuevo Producto" class="btn btn-primary py-2 px-3"></p>
                </div>
              </form>
    &nbsp;
    <br>
    <br>
    <br>
    <br>
    <br>



</main>

<?php  
include 'includes/footer.php';  
?>