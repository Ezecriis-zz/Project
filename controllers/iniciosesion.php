<?php

//controller/iniciosesion.php

require '../fw/fw.php';
require '../view/InicioSesion.php';

$s = new InicioSesion;
$s->render();