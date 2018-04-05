<?php

class Category {

    private $id;
    private $name;
    private $description;

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
    
    public function name()
    {
        return $this->name;
    }
    
    public function description()
    {
        return $this->description;
    }

    // setters
    
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
  }
