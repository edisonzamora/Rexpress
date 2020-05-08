<style>

</style>
<div class="contenedor-home">
    <div class="fila fila1">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action ">formulario</a>
            <a href="#" class="list-group-item list-group-item-action activo">Editar</a>
            <a href='<?php echo "{$path}controladores/pr_dtroy_session.php" ?>' class="list-group-item list-group-item-action">cerrar seción</a>
        </div>
    </div>
    <div class="fila fila2">
        <?php
        include "formView.php";
        ?>
    </div>
    <div class="fila fila3">
        <div class="text-center">
            <img src='<?php echo "{$_SESSION["user_imagen"]}"; ?>' alt="..." class="img-thumbnail">
        </div>
        <div class="card-body">
            <h5 class="card-title card-txt-color"><?php echo $_SESSION["user_nombre"] . "  " . $_SESSION["user_apellido"]; ?></h5>
            <p class="card-text card-txt-color txt-size">Correo: <?php echo $_SESSION["user_correo"]; ?></p>
            <p class="card-text card-txt-color txt-size">Telefono: <?php echo $_SESSION["user_telefono"]; ?></p>
            <form>
                <label for="exampleFormControlFile1 " class="card-txt-color txt-size txt-center">Cambiar Imagen</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </form>
        </div>
    </div>