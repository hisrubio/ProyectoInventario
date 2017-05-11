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
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> jorgepimpinela8@gmail.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
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
    
    <div id="logo" style="position: absolute; width: 30%; margin: -20px;">

      <h1><img src="imagenes/logo.png" style="width: 100px; margin-right: 40px;"><a href="home.php">Inventario</a></h1>
    </div>
    <div id="quickinfo" class="fl_right">
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
      <li class="active"><a href="home.php">Home</a></li>
      
      <li><a class="drop" href="#">INCIDENCIAS</a>
        <ul>
            <li><a href="verincidencias.php">VER</a></li>
            <li><a href="formIncidencias.php">NUEVA</a></li>
        </ul>
      </li>
      <li><a class="drop" href="">REVISIONES</a>
        <ul>
            <li><a href="#">VER</a></li>
            <li><a href="#">NUEVA</a></li>
        </ul>
      </li>
      <li><a class="drop" href="#">MATERIALES</a>
        <ul>
            <li><a href="#">VER</a></li>
            <li><a href="#">NUEVO</a></li>
        </ul>
      </li>
      <li><a class="drop" href="">MARCAS</a>
        <ul>
            <li><a href="#">VER</a></li>
            <li><a href="#">NUEVA</a></li>
        </ul>
      </li>
      <li><a class="drop" href="#">PROVEEDORES</a>
        <ul>
            <li><a href="#">VER</a></li>
            <li><a href="#">NUEVO</a></li>
        </ul>
      </li>
      <li><a class="drop" href="">SOFTWARE</a>
        <ul>
            <li><a href="#">VER</a></li>
            <li><a href="#">NUEVO</a></li>
        </ul>
      </li>
      <li><a class="drop" href="#">UBICACIONES</a>
        <ul>
            <li><a href="#">VER</a></li>
            <li><a href="#">NUEVA</a></li>
        </ul>
      </li>
      <li><a class="drop" href="">USUARIOS</a>
        <ul>
            <li><a href="#">VER</a></li>
            <li><a href="#">NUEVO</a></li>
        </ul>
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
      <p>aqui la informacion del proyecto y como funciona.</p>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn" href="#">Iaculis diam</a></li>
          <li><a class="btn inverse" href="#">Eget maximus</a></li>
        </ul>
      </footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <div class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <ul class="nospace elements">
      <li class="one_third first">
        <article>
          <figure><img src="images/demo/320x220.png" alt="">
            <figcaption><a href="#">View Details &raquo;</a></figcaption>
          </figure>
          <div class="txtwrap">
            <h6 class="heading">Nulla quis fermentum</h6>
            <p>Justo viverra imperdiet proin ut mollis risus ut cursus auctor orci quis iaculis nisi sollicitudin eget pellentesque rutrum mauris et&hellip;</p>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article>
          <figure><img src="images/demo/320x220.png" alt="">
            <figcaption><a href="#">View Details &raquo;</a></figcaption>
          </figure>
          <div class="txtwrap">
            <h6 class="heading">Feugiat cras ultrices</h6>
            <p>Ullamcorper ut vivamus dignissim fringilla metus sed aliquet nunc ut dolor arcu euismod id tincidunt id ullamcorper ac urna&hellip;</p>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article>
          <figure><img src="images/demo/320x220.png" alt="">
            <figcaption><a href="#">View Details &raquo;</a></figcaption>
          </figure>
          <div class="txtwrap">
            <h6 class="heading">Risus non iaculis</h6>
            <p>Mauris pellentesque pellentesque quisque velit elit venenatis et sodales ut commodo nec odio in sit amet tempus felis scelerisque&hellip;</p>
          </div>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="center btmspace-80">
      <p class="nospace"><a href="#">Amet consectetur adipiscing</a></p>
      <h2 class="heading font-x3">Interdum mi at convallis ultrices</h2>
    </div>
    <div class="group center">
      <article class="one_quarter first"><i class="icon fa fa-balance-scale"></i>
        <h4 class="font-x1 uppercase"><a href="#">Porttitor</a></h4>
        <p>Arcu vel aliquet enim maximus et etiam euismod ex eget gravida pretium enim ligula commodo.</p>
      </article>
      <article class="one_quarter"><i class="icon fa fa-bank"></i>
        <h4 class="font-x1 uppercase"><a href="#">Elementum</a></h4>
        <p>Magna nec commodo ipsum libero a risus curabitur volutpat urna ac nisi suscipit vestibulum.</p>
      </article>
      <article class="one_quarter"><i class="icon fa fa-plane"></i>
        <h4 class="font-x1 uppercase"><a href="#">Consectetur</a></h4>
        <p>Nulla eu massa ornare dictum erat vel tristique ipsum suspendisse potenti in nec finibus ante.</p>
      </article>
      <article class="one_quarter"><i class="icon fa fa-graduation-cap"></i>
        <h4 class="font-x1 uppercase"><a href="#">Ullamcorper</a></h4>
        <p>Vestibulum gravida magna ex in dictum purus rutrum quis morbi scelerisque tempor tortor et porta.</p>
      </article>
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <ul class="nospace elements">
      <li class="one_third first">
        <article class="center"><a href="#"><img src="images/demo/320x220.png" alt=""></a>
          <div class="txtwrap">
            <time class="font-xs block" datetime="2045-04-06">6<sup>th</sup> April 2045</time>
            <h6 class="heading">Lacus ornare eget</h6>
            <p>Non purus sodales aliquam lectus sagittis aliquet nisl consequat&hellip;</p>
            <footer><a href="#">Read More &raquo;</a></footer>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article class="center"><a href="#"><img src="images/demo/320x220.png" alt=""></a>
          <div class="txtwrap">
            <time class="font-xs block" datetime="2045-04-05">5<sup>th</sup> April 2045</time>
            <h6 class="heading">Porta felis justo</h6>
            <p>Est sodales at cras accumsan justo aliquam imperdiet risus lacinia&hellip;</p>
            <footer><a href="#">Read More &raquo;</a></footer>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article class="center"><a href="#"><img src="images/demo/320x220.png" alt=""></a>
          <div class="txtwrap">
            <time class="font-xs block" datetime="2045-04-04">4<sup>th</sup> April 2045</time>
            <h6 class="heading">Justo magna lacinia</h6>
            <p>Laoreet quam tortor rhoncus mi sed condimentum sit amet molestie&hellip;</p>
            <footer><a href="#">Read More &raquo;</a></footer>
          </div>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h6 class="title">Ultricies turpis libero</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Street Name &amp; Number, Town, Postcode/Zip
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890<br>
          +00 (123) 456 7890</li>
        <li><i class="fa fa-fax"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="title">Egestas risus sed</h6>
      <ul class="nospace linklist">
        <li><a href="#">class aptent taciti sociosqu ad litora</a></li>
        <li><a href="#">per conubia nostra inceptos himenaeos</a></li>
        <li><a href="#">donec elit metus malesuada quis</a></li>
        <li><a href="#">molestie convallis cursus eros donec</a></li>
        <li><a href="#">elit turpis ornare auctor mattis feugiat</a></li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="title">Ultricies eros libero</h6>
      <p class="btmspace-30">Vitae lectus mauris dui ipsum rhoncus vitae semper quis ultrices in nibh.</p>
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
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
    <p class="fl_left">Copyright &copy; 2015 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
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