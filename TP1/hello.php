<?php

class movie
    {
    private $name = null;
    private $description = "darty papa?";
    private $duration = 120;
    
    public function __construct($name="")
    {
        $this->name = $name;
    }
    
    public function getName()
    {    
        return $this->name;
    }
    
    public function setName($name = "Tbo")
    {
        $this->name = $name;
    }
    public function myEcho()
        {
        print 'Le film est :' . $name;
    }
    public function hello()
        {
        print'hello';
    }
}
$Movie = new movie;
echo $Movie->getName();
$Movie->setName("Sharknado");

