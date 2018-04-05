<?php

class Caroption {

    private $id;
    private $airbag;
    private $capacity;
    private $conditioner;
    private $passenger;
    private $permis;

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
}
