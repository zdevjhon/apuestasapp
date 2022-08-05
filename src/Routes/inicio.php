<?php

use App\Config\ResponseHttp;


$params  = explode('/' ,$_GET['route']);
$rs = array(
    'status'=>'ok',
    'message'=> 'Bienvenido'
);



require_once './src/View/inicio.php';
return $rs;

/****************Error 404*****************/
echo json_encode(ResponseHttp::status200('Solicitud aceptada'));