<?php
class aula extends espacio{
    private $numero;
    private $proyector;
    private $pizarra;
    private $pantalla;
    public function getNumero()
    {
        return $this->numero;
    }

    public function getProyector()
    {
        return $this->proyector;
    }

    public function getPizarra()
    {
        return $this->pizarra;
    }

    public function getPantalla()
    {
        return $this->pantalla;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    public function setProyector($proyector)
    {
        $this->proyector = $proyector;
    }

    public function setPizarra($pizarra)
    {
        $this->pizarra = $pizarra;
    }

    public function setPantalla($pantalla)
    {
        $this->pantalla = $pantalla;
    }

}