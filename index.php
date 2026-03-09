
        <?php
        require_once "autoload.php";
      

        $gestor = new GestorPDO();

        //Consultar datos
        $arrayPersonas = $gestor->listar();
        ?>
