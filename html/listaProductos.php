<?php   

//html / ListaProductos.php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lista productos </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<center-rigth ><a href="Home"><img width="50mp" src="\marce\proyectMarce\imagenes\static\inicio.png"></a></center>
<div class="container">
  <center><h1>Lista de productos </h1></center>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Stock</th>
        <th>Detalles</th>
        <th>Precio Unitario</th>
        <th>Cantidad</th>
        <th>Carro</th>
      </tr>
    </thead>
    <tbody>
      
    <?php foreach ( $this->List as $d) { ?>
    <form action="carrito" method="post">
      <div>
        <tr>
           <td><?=$d['stock']?></td>
           <td><a href="producto-<?=$d['detalles_id']?>"><?=$d['detalle']?></a></td>
           <td><?=$d['precio']?></td> 
           <input type="hidden" name="idProducto" value="<?=$d['codigoParte']?>"/>
           <input type="hidden" name="detalleProducto" value="<?=$d['detalle']?>"/>
           <input type="hidden" name="precioParte" value="<?=$d['precio']?>"/>
           <td><input id="cant" type="number" min="1" max="<?=$d['stock']?>" size="3" name="cantidad" value="1"/></td>  
           <td id="botoncarrito"><input type="submit" value="Añadir a Carrito"/></td>           
        </tr>
      </div>
    </form>

    <?php } ?>
    
    </tbody>
  </table></br>
  <center-left><button><a href="VerMarcas"><img width="50mp" src="\marce\proyectMarce\imagenes\static\volver2.png"></a></button></center-left> 
   </div></center-rigth>
 </body>
</html>
