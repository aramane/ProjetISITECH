<?php

class Caroption {

    private $id;
    private $airbag;
    private $capacity;
    private $conditioner;
    private $passenger;
    private $permis;
    private $boardcpu;
    private $cam;
    private $wheel;
    private $radar;

    public function hydrate(array $array)
    {
        foreach ($array as $key => $value)
        {
            $method = 'set'.ucfirst($key);
            
            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }

    public function __construct(array $array)
    {
        $this->hydrate($array);
    }

    // getters
    public function id()
    {
        return $this->id;
    }
    
    public function airbag()
    {
        return $this->airbag;
    }
    
    public function capacity()
    {
        return $this->capacity;
    }
    
    public function conditioner()
    {
        return $this->conditioner;
    }
    
    public function passenger()
    {
        return $this->passenger;
    }
    
    public function permis()
    {
        return $this->permis;
    }
    
    public function boardcpu()
    {
        return $this->boardcpu;
    }
    
    public function cam()
    {
        return $this->cam;
    }
    
    public function wheel()
    {
        return $this->wheel;
    }
    
    public function radar()
    {
        return $this->radar;
    }

    // setters
    public function setId($id) 
    {
        $this->id = $id;
    }
    
    public function setAirbag($airbag)
    {
        $this->airbag = $airbag;
    }
    
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }
    
    public function setConditioner($conditioner)
    {
        $this->conditioner = $conditioner;
    }
    
    public function setPassenger($passenger)
    {
        $this->passenger = $passenger;
    }
    
    public function setPermis($permis)
    {
        $this->permis = $permis;
    }
    
    public function setBoardcpu($boardcpu)
    {
        $this->boardcpu = $boardcpu;
    }
    
    public function setCam($cam)
    {
        $this->cam = $cam;
    }
    
    public function setWheel($wheel)
    {
        $this->wheel = $wheel;
    }
    
    public function setRadar($radar)
    {
        $this->radar = $radar;
    }
}
