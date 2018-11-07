<?php   

//html / Marcas.php

?>
<style>

body {
	   font-family: 'Source+Code+Pro:500', sans-serif;
	  background-image: url("http://p1.pichost.me/640/54/1777799.jpg");  
	 }
	.nav { 
	    width: auto;
	    height: auto;
	    margin-left: 10px;
	    margin-top: 3px;
	    list-style: none
	}
	.nav a,
	p.link a {
	    text-decoration: none;
	}
	.nav li {
	    text-align: justify;
	    width: 200px;
	    padding: 4px;
	    transition: all .2s linear;
	    background-color: #000;
	    border: 1px solid #333
	}

	.nav a {
	    color: #fff
	}

	.nav li:hover {
	    -moz-transform: translate(30px, 00px);
	    -webkit-transform: translate(30px, 00px);
	    -moz-border-radius: 0 9px 9px 0;
	    -webkit-border-radius: 0 9px 9px 0;
	    border-radius: 0 9px 9px 0;
	    transform: translate(30px, 00px);
	    background: -webkit-gradient(linear, 80% 20%, 10% 21%, from(#D20000), to(#610028));
	    background: -ms-gradient(linear, 80% 20%, 10% 21%, from(#D20000), to(#610028));
	    background: -moz-gradient(linear, 80% 20%, 10% 21%, from(#D20000), to(#610028))
	}

    .nav li:active {
    background-color: #D8D8D8
    }

    .btn {
    font-weight: 700;
    height: 36px;
    -moz-user-select: none;
    -webkit-user-select: none;
    user-select: none;
    cursor: default;
}
</style>

<!DOCTYPE html>
<html>
<head>
	<title> Marcas Disponibles</title>	
</head>
<body>
  <center><h1>Marcas Disponibles</h1></center>
  <br style="clear: both;" />
	  <?php foreach($this->Marcas as $p) { ?>
          <center><ul class="nav">  
           <!-- <li><a href="Ver-<?= $p['marca']?>-<?= $p['marca_id']?>"> <?= $p['marca'] ?> </a></li> -->
           <a href="Ver-<?= $p['marca']?>-<?= $p['marca_id']?>"><li> <?= $p['marca'] ?> </li></a>
          </ul></center>
   	 <?php } ?>
   	 <center-left><a href="Home"><img width="50mp" class="volver" src="\marce\proyectMarce\imagenes\static\volver2.png"></a></center> 
</body>
</html>