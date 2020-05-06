<!DOCTYPE html>
<html lang="es">
<?php
$http  =     $_SERVER["REQUEST_SCHEME"];
$host  =     $_SERVER["HTTP_HOST"];
$dirname = "/" . basename(dirname(__FILE__)) . "/";
$path  =     $http . "://" . $host . $dirname;
$url_style =  $path . "view/style";
$url_js =     $path . "view/js";
include 'view/templates/head.php';
?>
<style>
    .badge-pill {
        position: absolute;
        margin: 3px;
    }
</style>

<body>
    <span class="badge badge-pill badge-light">Desarrollo</span>
    <div class="rexp-error"></div>
    <?php
    session_start();
    include 'view/templates/header.php';
    include 'view/templates/content.php';
    include 'view/templates/js.php';
    ?>
</body>

</html>