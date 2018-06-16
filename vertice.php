<?php

class Vertice {

    public $id;
    public $visitado;
    public $padre;
    public $distancia;

    public function __construct($i) {

        $this->id = $i;
        $this->visitado = false;
        $this->distancia=-1;
        $this->padre=null;
        
    }

    public function getId() {
        return $this->id;
    }

    public function setId($i) {
        $this->id = $i;
    }

    public function getVisitado() {
        return $this->visitado;
    }

    public function setVisitado($v) {
        $this->visitado = $v;
    }
    function getPadre() {
        return $this->padre;
    }

    function getDistancia() {
        return $this->distancia;
    }

    function setPadre($padre) {
        $this->padre = $padre;
    }

    function setDistancia($distancia) {
        $this->distancia = $distancia;
    }


}

?>