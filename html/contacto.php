<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8"/>
<title>Formulario</title>
<link href="styles.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400' rel='stylesheet' type='text/css'>
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
<style type="text/css">
	/* reglas CSS para formulario */
.form-consulta {
max-width: 900px; 
background: #eee;
padding: 25px;
font-family: 'Source Sans Pro',
sans-serif;
}
.campo-form {
 width:100%;
 height:36px; 
 margin:2px 0 6px; 
 padding-left:6px; 
 box-sizing: border-box; 
 border-radius:3px; 
 border:0; 
 font-family: 'Source Sans Pro', 
 sans-serif; font-size:1em;
}
label span {
color: #f00
}
textarea {
min-height: 150px!important;
}
.btn-form {
display: inline-block;
border:0; 
background: #000; 
height: 86px; 
line-height: 46px; 
padding: 0 20px; 
border-radius: 6px; 
color:#fff; 
text-decoration: none; 
text-transform: uppercase; 
letter-spacing: 1px
}
.btn-form:hover {
	background: #444
}

.previous {
    background-color: #f1f1f1;
    color: black;
}

.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
}

</style>

<!-- formulario de contacto -->

	<form action="envia.php" method="post" class="form-consulta"> 
		<label>Nombre y apellido: <span>*</span>
			<input type="text" name="nombre" placeholder="Nombre y apellido" class="campo-form" required>
		</label>
		
		<label>Email: <span>*</span>
			<input type="email" name="email" placeholder="Email" class="campo-form" required>
		</label>
		
		<label>Consulta:
			<textarea name="consulta" class="campo-form"></textarea>
		</label>

		<input type="submit" name="enviar" value="Enviar" class="btn-form">		
	</form>
    	<div class=".button">
    		<button>
				<a href="Home" class="previous">Atras</a>
			</button>
		</div>
<!-- formulario -->

</body>
</html>