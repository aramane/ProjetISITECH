<?php

class Contract {

    private $id;
    private $type;
    private $booking_code;
    private $path;

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
    
    public function type()
    {
        return $this->type;
    }
    
    public function booking_code()
    {
        return $this->booking_Code;
    }
    
    public function path()
    {
        return $this->path;
    }

    // setters
    
    public function setId($id)
    {
        $this->id = $id;
    }
    
    public function setType($type)
    {
        $this->type = $type;
    }
    
    public function setBooking_code($booking_code)
    {
        $this->booking_code = $booking_code;
    }
    
    public function setPath($path)
    {
        $this->path = $path;
    }
  }
