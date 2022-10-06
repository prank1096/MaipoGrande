<?php 
include_once 'db.php';
require 'config.php';
require 'conexion.php';
?>
<?php  
include 'includes/header.php';  
?>
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
                    <span class="details">rut</span>
                    <input name="rut" type="text" placeholder="20.321.654-k" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Numero Telefonico</span>
                    <input name="numerotele" type="number" placeholder="912345678" autocomplete="off" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Direccion</span>
                    <input name="direccion" type="text" placeholder="calle falsa 123" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Correo</span>
                    <input name="correo" type="email" placeholder="aaaaa@yourdomain.com" autocomplete="off" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Ciudad</span>
                    <input name="ciudad" type="text" placeholder="Santiago" autocomplete="off" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Pais</span>
                    <input name="pais" type="text" placeholder="Chile" autocomplete="off" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Nombre de Usuario</span>
                    <input name="user" type="text" placeholder="Chile" autocomplete="off" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Contraseña Usuario</span>
                    <input name="password" type="password" placeholder="Chile" autocomplete="off" required>
                  </div>
                  <span class="psw">Tienes cuenta? <a href="login.php">Iniciar Sesion</a></span>
                </div>
                <p><input href="login.php" type="submit" name="registrar" class="btn btn-primary py-2 px-3"></p>
                </div>
              </form>
            </div>
          </div>
        </body>
        </html>

