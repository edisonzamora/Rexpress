<?php
echo  basename(dirname(__DIR__)) . "\n";
echo basename(dirname(__DIR__)) . '/modelo/usuario.php';
echo  var_dump($_GET);
echo  var_dump($_POST);
$request_method = $_SERVER["REQUEST_METHOD"];

echo $request_method;
