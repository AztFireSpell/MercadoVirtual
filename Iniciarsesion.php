<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/iniciarsesion.css">
    <title></title>
  </head>
  <body>
    <?php
    require_once("sections/encabezado.php");
     ?>
     <div class="formulario">
       <form class="" action="" method="post">
         <h1>INICIAR SESION</h1>
         <input id="caja" type="text" name="nombre" maxlength="20" placeholder="Ingrese su usuario">
         <input id="caja" type="password" name="password" maxlength="20" placeholder="Ingrese su contraseña">
         <button type="button" onclick="location.href='RegistroDatosVendedor.php'">Registrate</button>
         <input type="submit" name="login" value="Ingresar">
       </form>
       <?php
        if(isset($_POST["login"])){
          require_once("admin/usuario.php");
          // IDEA: instanciamos un nuevo objeto
            $obj= new Usuario();
            $nom= $_POST["nombre"];
            $pass= $_POST["password"];
            $bandera = $obj->validar($nom,$pass);
            if ($bandera==true) {
              header("Location: index.php");
            }
        }
        ?>
     </div>
  </body>
</html>
