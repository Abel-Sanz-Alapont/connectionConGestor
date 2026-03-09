
        <?php
        require_once "autoload.php";
        echo "<h1>Hello, Welcome DAW Student!</h1>";

        $gestor = new GestorPDO();

        //Consultar datos
        $arrayPersonas = $gestor->listar();
        ?>
