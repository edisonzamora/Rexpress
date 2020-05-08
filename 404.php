<?php
$http  =     $_SERVER["REQUEST_SCHEME"];
$host  =     $_SERVER["HTTP_HOST"];
$dirname = "/" . basename(dirname(__FILE__)) . "/";
$path  =     $http . "://" . $host . $dirname;
$url_style =  $path . "view/style";
$url_js =     $path . "view/js";
include "view/templates/head.php";
include "view/templates/header.php";
?>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4 content">404</h1>
        <p class="lead content">No se encontrado la dirección.
            Clique <a href='<?php echo "{$path}" ?>'>aqui</a> para ir a la pagina prinsipal.
        </p>
    </div>
</div>
<style>
    .content {
        color: black;
    }
</style>