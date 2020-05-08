<form id="form-formView" action=<?php echo "'{$path}controladores/pr_registrar_user.php?tipo=" . base64_encode("USU") . "&activo=" . base64_encode(1) . "'"; ?> method="post" id="form">
    <div class="contenedor-login">
        <input type="text" name="nombreUsuario" placeholder="Nombre">
        <input type="text" name="apellido" placeholder="Apellido">
        <input type="email" name="correo" required="" placeholder="E-mail">
        <input type="text" name="telefono" required="" placeholder="telefono">
        <input type="password" name="password" required="" placeholder="Password" onfocus="addinputreppass()">
        <div class="form-group">
            <label for="exampleFormControlFile1">Cambiar Imagen</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <input type="submit" name="submit" id="form-form__btn" value="aceptar">
    </div>
</form>
<?php
/**session_start();**/
if (isset($_SESSION["regitrado"])) {
    echo "<div class=''>" . $_SESSION["regitrado"] . "</div>";
}
?>