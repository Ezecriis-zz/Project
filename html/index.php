<!-- html/index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://file.myfontastic.com/BTCVAXtnvDHWvoVcpM5pof/icons.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>

body {
      /*background-image: url("http://p1.pichost.me/640/54/1777711.jpg"); */
     }
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }

    .footer {
    background: #333;
    color: #fff;
    padding: 10px;
    text-align: center;
}

.footer .social [class^="icon-"] {
    color: #333;
    text-decoration: none;
    font-size: 20px;
    padding: 10px;
    background: white;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    line-height: 20px;
}

  </style>
</head>
<body>
  <?php 
  require("conexion.php");

$conexion=mysqli_connect($dbhost,$dbusuario,$dbclave);
if(mysqli_connect_errno())
{
  echo "Error con la conexion de la base da datos";
  exit();
}
mysqli_select_db($conexion,$dbnombre) or die ("no se encuentra la base de datos");
mysqli_set_charset($conexion,"utf8");
   ?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar">hola </span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="Home">Home</a></li>
        <li><a href="empresa">Quienes Somos</a></li>
        <li><a href="contacto">Contacto</a></li>
      </ul>
      <ul class="nav navbar-nav">
        <li class="active"><a href="VerMarcas">Productos</a></li>
        <li><a href="#">Accesorios</a></li>
      </ul>
      <header class="st">
    <div class="container">      
      <span class="right"><?php 
        if((isset($_SESSION['usuario'])) && ($_SESSION['usuario'] != "")) {?>
          //var_dump($_SESSION);
           <ul class="nav navbar-nav navbar-right" style="margin-top: 4px">
           <?php echo "<font color='#ffffff'>Hola,</font> <font color='#ffffff'>". $_SESSION['usuario']['nombre']. "</font>"; ?>  
          <div class="column">
            <a href="close">Cerrar sesion</a>
          </div>
           </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="carrito"><span class="glyphicon glyphicon-log-in"></span> carrito</a></li>
          </ul>
      <?php } 
        else { ?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href=login><span class="glyphicon glyphicon-log-in"></span> Ingresar</a></li>
         </ul>
        <?php } ?></span>        
    </div>    
  </header>
      
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Bienvenidos a Byte</h1>
      <p>Somos una empresa familiar dedicada a la venta de repuestos desde el año 1995, con mas de 20 años de experiencia nos vemos obligados a mejorar la tención hacia nuestros clientes día tras día. Es por eso que surge la idea de Byte-Web. 
      Byte-Web es una tienda on-line de Argentina especializada en la venta de repuestos y accesorios para Celulares, tablet y Accesorios. 
	  Esperamos pueda disfrutar de la tienda y no dude en hacer las preguntas que crea necesarias para poder comprar con comodidad y confianza.
	  Nos interesa también cualquier sugerencia o critica que nos pueda brindar con el fin de mejorar y ampliar la tienda.
	  En el apartado “CONTACTO”, encontrara todos los datos necesarios para poder comunicarse con nosotros. </p>
      <hr>
      <h3>Buscanos en las redes sociales</h3>
      <p>Podes encontrarnos en Facebook y ver nuestras ofertas en celulares e importantes descuentos para la gente del gremio "Tecnicos reparadores de celulares".
      No te olvides de Registrarte si sos del gremio y queres disfrutar de los descuentos para vos.</p>
    </div>

                    <div class="column column260 mayHide">

    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<footer class="footer">
  <p>  Av.Eva Peron 2020 - 1716 - Libertad-Buenos Aires - (11) 6200-5680 <a class="nombre" href="Home"><span>Byte.com</span></a>  </p> <br>
    <div class="contenedor">
        <div class="social">
          <a href="#" class="icon-facebook"></a>
          <a href="#" class="icon-twitter"></a>
          <a href="#" class="icon-gplus"></a>
          <a href="#" class="icon-vine"></a>
        </div>
        <p class="copy">&copy; <br> <br> Cristian Ezequiel Todos los derechos </p>
      </div>
</footer>
</body>
</html>        