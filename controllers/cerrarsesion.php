<?php

//controllers/cerrarsesion.php

require '../fw/fw.php';
require '../view/InicioSesion.php';

session_destroy();
header("Location: Home");
exit;