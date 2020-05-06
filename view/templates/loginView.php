<form id="form-loginview" action="controller/login" method="post">
      <!-- <label for="email" class="">E-Mail:</label> required="true"-->
      <div class="contenedor-login">
            <?php
            if (isset($_COOKIE["user"])) {
                  $email_usu = $_COOKIE["user"]["correo"];
                  $usu_dec = base64_decode($email_usu);
                  echo "<input  type='text' name='nombreUsuario' required='true' value='{$usu_dec}' placeholder='Nombre'>";
            } else {
                  echo "<input  type='text' name='nombreUsuario' required='true' placeholder='Nombre'>";
            }
            ?>
            <input type="password" name="password" required="true" placeholder="Password">
            <input type="submit" name="bot-login" value="log in">
            <div class="form-logim__coten-checkbox">
                  <input type="checkbox" id="check-login" name="check-login" value="recordar">
                  <label for="check-login" id="lb_estado_check">¿ Quiere recordar el usuario ?</label>
            </div>
            <?php
            include "passlink.php";
            ?>
            <div id="alert_check"></div>
      </div>
</form>