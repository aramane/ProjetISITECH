<?php

class Reparation {

    private $id;
    private $date;
    private $description;
    private $duration;
    private $garage;
    private $price;
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

    //getters
    
    public function id()
    {
        return $this->id;
    }
    
    public function date()
    {
        return $this->date;
    }
    
    public function description()
    {
        return $this->description;
    }
    
    public function duration()
    {
        return $this->duration;
    }
    
    public function garage()
    {
        return $this->garage;
    }
    
    public function price()
    {
        return $this->price;
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
    
    public function setDate($date)
    {
        $this->date = $date;
    }
    
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }
    
    public function setGarage($garage)
    {
        $this->garage = $garage;
    }
    
    public function setPrice($price)
    {
        $this->price = $price;
    }
    
    public function setId_car($id_car)
    {
        $this->id_car = $id_car;
    }
}
