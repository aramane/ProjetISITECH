<?php

class Car{
    //Properties
    
    private $id;
    private $registration;
    private $name;
    private $color;
    private $model;
    private $brand;
    private $id_option;
    private $id_category;
    
    //Hydrate
    public function hydrate(array $array)
    {
        foreach($array as $key => $value)
        {
            $method = 'set' . ucfirst($key);
            
            if(method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }
    
    //Construct
    public function __construct(array $array)
    {
        $this->hydrate($array);
    }
    
    //getters
    
    public function id()
    {
        return $this->id;
    }
    
    public function registration()
    {
        return $this->registration;
    }
    
    public function name()
    {
        return $this->name;
    }
    
    public function color()
    {
        return $this->color;
    }
    
    public function model()
    {
        return $this->model;
    }
    
    public function brand()
    {
        return $this->brand;
    }
    
    public function id_option()
    {
        return $this->id_option;
    }
    
    public function id_category()
    {
        return $this->id_category;
    }
    
    //setters
    
    public function setId($id)
    {
        $this->id = $id;
    }
    
    public function setRegistration($registration)
    {
        $this->registration = $registration;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function setColor($color)
    {
        $this->color = $color;
    }
    
    public function setModel($model)
    {
        $this->model = $model;
    }
    
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }
    
    public function setId_option($id_option)
    {
        $this->id_option = $id_option;
    }
    
    public function setId_category($id_category)
    {
        $this->id_category = $id_category;
    }   
}
