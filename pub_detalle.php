<?php 
include 'includes/headermenus.php';  
include_once 'db.php';
require 'config.php';
require 'conexion.php';

//consulta para obtener los tipos de productos
$consulta = "SELECT * FROM producto";
$resultado_productos = mysqli_query($conexion, $consulta);

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

.center {
  margin-left: auto;
  margin-right: auto;
}
.button5 {border-radius: 12px;}

table {
  width: 100%;
  border: 1px;
}

a.table {
  width: 100%;
  border: 1px solid;
}

</style>  
  <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          </div>
        </div>
      </div>
    </div>
    <body>
    <html>
<head>
<body>
<br>
<h2 class="color" style="font-family:verdana;">Felicidades!, te encuentras un paso más cerca de conectar con nuestros usuarios.</h2>
<br>

<table>
  <tr>
    <th class="text-center">Nombre de la Publicación</th>
  </tr>
  </thead>
    <tbody>
    <?php
    $customer_query = "SELECT * from publicacion where id_publicacion = (SELECT MAX(id_publicacion) FROM publicacion)";

    $customer_result = mysqli_query($conexion, $customer_query);
    if (mysqli_num_rows($customer_result) > 0) {
        $num = 0;
        while ($customer = mysqli_fetch_assoc($customer_result)) {
            $num++
            ?>
            <tr>
                <td class="text-sm-center"><?php echo $customer['pub_nombre'] ?></td>
                </td> 
            </tr>
        <?php }
    } else {
        echo "";
    }
    ?>
  </tbody>     
</table>
<table>
  <tr>
    <br>
    <th class="text-center">Descripción</th>
  </tr>
  </thead>
    <tbody>
    <?php
    $customer_query = "SELECT * from publicacion where id_publicacion = (SELECT MAX(id_publicacion) FROM publicacion)";

    $customer_result = mysqli_query($conexion, $customer_query);
    if (mysqli_num_rows($customer_result) > 0) {
        $num = 0;
        while ($customer = mysqli_fetch_assoc($customer_result)) {
            $num++
            ?>
            <tr>
                <td class="text-sm-center"><?php echo $customer['pub_descripcion'] ?></td>
                </td> 
            </tr>
        <?php }
    } else {
        echo "";
    }
    ?>
  </tbody>     
</table>


<center>
        <div class="container">
          <br>
          <br>
          <h3 class="color" style="font-family:verdana;">A continuación, agrega los productos que necesitas a tu publicación</h3>
          <br>

          <table>
  <tr>
    <th class="text-center">Producto</th>
    <th class="text-center">Cantidad</th>
  </tr>
  </thead>
    <tbody>
    <?php
     $productos =      "SELECT * FROM publicacion a 
                        left join publicaciondetalle b on b.id_publicacion = a.id_publicacion
                        left join producto c on c.id_producto = b.id_producto
                        WHERE a.id_publicacion = (select MAX(id_publicacion) from publicacion)";

    $a = mysqli_query($conexion, $productos);
    if (mysqli_num_rows($customer_result) > 0) {
        $num = 0;
        while ($productos = mysqli_fetch_assoc($a)) {
            $num++
            ?>
            <tr>
                <td class="text-sm-center"><?php echo $productos['pro_nombre'] ?></td>
                <td class="text-sm-center"><?php echo $productos['pubdet_cantidad'] ?></td>
                </td> 
            </tr>
        <?php }
    } else {
        echo "";
    }
    ?>
  </tbody>     
</table>
        
        <div class="container">
          <form action="pub_detalle_crear.php" method="post">
          <br>
          <br>

              <label for="fname">Seleccione el producto</label>
              <br>
              <select class="input-box" name="id_producto" >
                        <option value="" >=-Seleccione=-</option>
                        <?php while($tipoproducto= mysqli_fetch_assoc($resultado_productos) ): ?>
                          <option   value="<?php echo $tipoproducto ['id_producto']; ?>" >
                          <?php echo $tipoproducto ['pro_nombre'] ; ?>
                        </option>
                          <?php endwhile; ?>
                    </select>
                    <br>
                    <br>
                    <br>
                    <div class="input-box">
                    <span class="details">Cantidad</span>
                    <input name="cantidad" type="number" placeholder="1" required  min="1" && max="99">
                  </div>
              <br>
              <br>
              <br>
              <input type="submit" name="pub_detalle_crear" class="button5" value="Agregar Productos">
          </form>
        </div>
        </body>
        </html>   


</body>
</html>
<?php
include 'includes/footermenus.php';
?>


