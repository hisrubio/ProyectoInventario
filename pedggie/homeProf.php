<!DOCTYPE html>
<!--
Template Name: Pedggie
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<?php
session_start();
if($_SESSION['Puesto']!='Profesor')
  header("location:index.php");
include("conexion.php");
?>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-phone"></i> 976 30 68 78</li>
        <li><i class="fa fa-envelope-o"></i> secretaria.zaragoza@salesianos.edu</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
        <li><a class="faicon-twitter" href="https://twitter.com/salesianosZAR?lang=es"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    
    <div id="logo" style="position:absolute; taxt-align:centre; width: 60%; margin: -20px;">
      <a href="homeProf.php"><img src="imagenes/logo1.png" style="width: 150px; margin-right: 40px;"></a>
    </div>
    <div id="titulo" style="margin-left: 40%;">
     <a href="homeProf.php"><h1 style="font-size:250%;">Inventario</h1></a>
    </div>

    <div id="quickinfo" class="fl_right" style="float:right; text-align:right">
      <ul class="nospace inline">
        <?php echo "<li><strong>Usuario: $_SESSION[nombreusuario]</strong></li><br>
        <li><strong>Dni: $_SESSION[dniusuario]</strong></li>"?>
        <li><a href="logout.php"><strong>Salir</strong></a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <nav id="mainav" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li class="active"><a href="homeProf.php">Home</a></li>
      <li><a class="drop" href="materiales/vermateriales.php">MATERIALES</a>
        <ul>
            <li><a href="materiales/vermateriales.php">VER</a></li>
        </ul>
      </li>
      <li><a class="drop" href="incidencias/formincidencias.php">INCIDENCIAS</a>
        <ul>
            <li><a href="incidencias/formincidencias.php">NUEVA</a></li>
        </ul>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </nav>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('imagenes/binario.jpg');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article class="introtxt">
      <h2 class="heading">Inventario Salesianos Zaragoza</h2>
      <p>Bienvenidos a la base de datos del Colegio Salesianos de Zaragoza. Aquí se puede encontrar un registro de los materiales, revisiones, incidencias y demás apartados que son implicados en el colegio..</p>
      </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row4">
   <footer id="footer" class="hoc clear" > 
    <!-- ################################################################################################ -->
    <div  >
      <h6 class="title">Contacto</h6>
      <ul class="nospace linklist contact" >
        <li><i class="fa fa-map-marker"></i>
          <address>
          Calle María Auxiliadora, 57, 50009 Zaragoza
          </address>
        </li>
        <li><i class="fa fa-phone"></i> 976 30 68 78<br></li>
        <li><i class="fa fa-envelope-o"></i> secretaria.zaragoza@salesianos.edu</li>
      </ul>
    </div>
    
    
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2017 - Todos los derechos reservados - <a href="#">Salesianos Zaragoza</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>