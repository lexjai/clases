<?php
class ordenador {
    private $SO;
    private $codHZ;
    private $esSobremesa;
    
    
    
    public function addOrdenador(){
        
        
    }
    public function getEsSobremesa()
    {
        return $this->esSobremesa;
    }

    public function setEsSobremesa($esSobremesa)
    {
        $this->esSobremesa = $esSobremesa;
    }

    public function getSO()
    {
        return $this->SO;
    }

    public function getCodHZ()
    {
        return $this->codHZ;
    }

    public function setSO($SO)
    {
        $this->SO = $SO;
    }

    public function setCodHZ($codHZ)
    {
        $this->codHZ = $codHZ;
    }

}