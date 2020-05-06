<!-- contenedor principal de header -->
<header>
    <div class="barra-top"></div>
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-text"><a class="navbar-brand" href=<?php echo "'{$path}'" ?>>Sistema de administración Rexpress</a></span>
        <span class="navbar-text"><a href=<?php echo "'{$path}view/info'" ?>><i class="material-icons">info</i></a></span>
    </nav>
    <?php if (isset($_SESSION["home"])) { ?>
        <?php
        // if (isset($_SESSION["home"])) {
        //     echo "<li><a href='' id='agregar-popup'><i class='material-icons'>person_add</i></a></li>";
        // }
        // 
        ?>
    <?php
    }
    ?>
</header>