<?php

class Controller
{
    protected $gestor;

    public function __construct($gestor) {
        $this->gestor=$gestor;
    }
    public function index(){
        $personas=$this->gestor->listar();//devuelve array de objetos 
    }
}
