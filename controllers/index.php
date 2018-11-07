<?php

//controller/index.php

require '../fw/fw.php';
require '../view/Index.php';

$a = new Index;
$a->render();