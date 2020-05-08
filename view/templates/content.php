      <div class="contenedor-central">
          <?php
            $get = isset($_GET["view"]) ? $_GET["view"] : "login";
            switch ($get) {
                case 'login':
                    error_log("Info=> main ; mensaje=>method->get: -");
                    if (isset($_SESSION["home"])) {
                        error_log("Info=> main ; mensaje=>sesion->On ; vista incluida: homeView");
                        header("Location: {$path}view/home.html");
                    } else if (!isset($_SESSION["home"])) {
                        error_log("Info=> main ; mensaje=>sesion->Off   ; vista incluida: loginView");
                        include 'views/loginView.php';
                    }
                    break;
                case 'home':
                    error_log("Info=> main ; mensaje=>method->get: home");
                    if (isset($_SESSION["home"])) {
                        error_log("Info=> main ; mensaje=>sesion->On ; vista incluida: homeView");
                        include 'views/homeView.php';
                    } else if (!isset($_SESSION["home"])) {
                        error_log("Info=> main ; mensaje=>sesion->Off   ; vista incluida: loginView");
                        header("Location: {$path}");
                    }
                    break;
                case 'form':
                    # code...
                    # entrada alternativa al formulario
                    if (!isset($_SESSION["home"])) {
                        error_log("Info=> main ; mensaje=>method->get: form ; vista incluida: formView");
                        include 'views/formView.php';
                    } else if (isset($_SESSION["home"])) {
                        error_log("Info=> main ; mensaje=>sesion->Off   ; vista incluida: loginView");
                        include 'views/homeView.php';
                    }
                    break;
                case 'info':
                    error_log("Info=> main ; mensaje=>method->get: info ; vista incluida: opcinfoViewView");
                    include 'views/infoView.php';
                    break;
                case 'rec-pass':
                    error_log("Info=> main ; mensaje=>method->get: rec-pass ; vista incluida: pass_recuView");
                    include 'views/pass_recuView.php';
                    break;
                default:
                    header('HTTP/1.0 404 Not Found', 404);
                    header("Location: {$path}404.html");
                    break;
            }
            ?>
      </div>