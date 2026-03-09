
        <?php
        require_once "autoload.php";
      

        $gestor = new GestorPDO();
        $controller =new Controller($gestor);

        //Consultar datos
        $controller->index();
        ?>
