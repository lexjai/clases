<?php
abstract class espacio {
    private $puntoWifi;
    private $puntoRed;
    public function getPuntoWifi()
    {
        return $this->puntoWifi;
    }

    public function getPuntoRed()
    {
        return $this->puntoRed;
    }

    public function setPuntoWifi($puntoWifi)
    {
        $this->puntoWifi = $puntoWifi;
    }

    public function setPuntoRed($puntoRed)
    {
        $this->puntoRed = $puntoRed;
    }

}