<?php

class GestorPDO extends Connection
{

    public function __construct()
    {
        return parent::__construct();
    }

    public function listar()
    {

        $consulta = "SELECT * FROM Person";
        $rtdo = $this->getConn()->query($consulta);
        $arrayPersonas = [];
        while ($value = $rtdo->fetch(PDO::FETCH_ASSOC)) {
            $persona = new Persona($value['name'], $value['id']);
            $arrayPersonas[] = $persona;
        }
        return $arrayPersonas;
    }
    /*
    Preguntar de donde sale el execute()y bindValue()
    */
    public function agregar(Persona $persona)
    {
        $consultaSQL = 'INSERT INTO Person (name)  VALUES (:nombre)'; //consulta SQL
        $stmt = $this->conn->prepare($consultaSQL);

        $stmt->bindValue(':nombre', $persona->getNombre());

        return $stmt->execute();    
    }

    public function eliminar($id){
        $consultaSQL= 'DELETE FROM Person WHERE id=:id';
        $stmt = $this->conn->prepare($consultaSQL);

        $stmt->bindValue(':id', $id);
        
        return $stmt->execute();   
    }
}
