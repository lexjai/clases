<?php
class variado extends espacio{
    
    private $tipo;
    
    public function addOrdenador($puntoOrdenador, $tipoa){
        parent::_constructor($puntoOrdenador);
        $tipoa = $this->tipo;
    }
    
    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

  
}