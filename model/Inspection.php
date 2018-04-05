<?php

class Inspection {

    private $id;
    private $constat;
    private $date;
    private $inspector;
    private $mileage;
    private $fuel;
    private $id_car;

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
    
    public function constat() 
    {
        return $this->constat;
    }
    
    public function date() 
    {
        return $this->date;
    }
    
    public function inspector() 
    {
        return $this->inspector;
    }
    
    public function mileage() 
    {
        return $this->mileage;
    }
    
    public function fuel() {
        return $this->fuel;
    }
    
    public function id_car() 
    {
        return $this->id_car;
    }

    // setters
    
    public function setId($id) 
    {
        $this->id = $id;
    }
    
    public function setConstat($constat) 
    {
        $this->constat = $constat;
    }
    
    public function setDate($date) 
    {
        $this->date = $date;
    }
    
    public function setInspector($inspector) 
    {
        $this->inspector = $inspector;
    }
    
    public function setMileage($mileage) 
    {
        $this->mileage = $mileage;
    }
    
    public function setFuel($fuel) 
    {
        $this->fuel = $fuel;
    }
    
    public function setId_car($id_car) 
    {
        $this->id_car = $id_car;
    }   
}
