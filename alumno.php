<?php
class alumno extends Persona {
    
    private $codMatricula;
    private $ciclo;
    
    public function getName(){}
    
    
    public function getCodMatricula()
    {
        return $this->codMatricula;
    }

    public function getCiclo()
    {
        return $this->ciclo;
    }

    public function setCodMatricula($codMatricula)
    {
        $this->codMatricula = $codMatricula;
    }

    public function setCiclo($ciclo)
    {
        $this->ciclo = $ciclo;
    }

    
}