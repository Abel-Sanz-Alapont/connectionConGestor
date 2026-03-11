<?php
        require_once "autoload.php";
       
        $gestor = new GestorPDO();
        $controller = new Controller($gestor);

        //Consultar datos

        $accion = $_GET['accion'] ?? 'index';

        switch ($accion) {
            case 'editar':
                //$controller->editar();
                break;
            case 'eliminar':
                //$controller->eliminar();
                break;
            case 'agregar':
                $controller->agregar();
                break;

            default:
                $controller->index();
        }
?>