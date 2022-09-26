<?php
class ocente extends Persona{
    private $sueldo;
    /**
     * @return mixed
     */
    public function getSueldo()
    {
        return $this->sueldo;
    }
    
    /**
     * @param mixed $sueldo
     */
    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;
    }
    
    
}