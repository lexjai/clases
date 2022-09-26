<?php



abstract class  Persona{
    private  $name="jairo";
    private $dni;
    private $email;
   
    public function getName()
    {
        return $this->name;
    }

    public function getDni()
    {
        return $this->dni;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setDni($dni)
    {
        $this->dni = $dni;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

}



