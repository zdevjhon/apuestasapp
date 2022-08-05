<?php

use App\Config\ResponseHttp;
use App\Controllers\ProductController;

/*************Parametros enviados por la URL*******************/
$params  = explode('/' ,$_GET['route']);
$rs = array(
    'status'=>'ok',
    'message'=> 'Bienvenido'
);

require_once  __DIR__ . '/view/inicio.php';
return $rs;

/****************Error 404*****************/
echo json_encode(ResponseHttp::status200('Ruta api'));