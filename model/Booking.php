<?php

class Booking {

    private $id_car;
    private $id_user;
    private $departureAgency;
    private $departureDate;
    private $endingDate;
    private $code;

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
    
    public function id_car()
    {
        return $this->id_car;
    }
    
    public function id_user()
    {
        return $this->id_user;
    }
    
    public function departureAgency()
    {
        return $this->departureAgency;
    }
    
    public function departureDate()
    {
        return $this->departureDate;
    }
    
    public function endingDate()
    {
        return $this->endingDate;
    }
    
    public function code()
    {
        return $this->code;
    }

    // setters
    public function setId_car($id_car)
    {
        $this->id_car = $id_car;
    }
    
    public function setId_user($id_user)
    {
        $this->id_user = $id_user;
    }
    
    public function setDepartureAgency($departureAgency)
    {
        $this->departureAgency = $departureAgency;
    }
    
    public function setDepartureDate($departureDate) 
    {
        $this->departureDate = $departureDate;
    }
    
    public function setendingDate($endingDate)
    {
        $this->endingDate = $endingDate;
    }
    
    public function setCode($code) 
    {
        $this->code = $code;
    }
    
    public function generateCode()
    {
        $date = date('Y-m');
	$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charactersLength = strlen($characters);
	$code = 'LOC-'.$date.'-';
	    
	for ($i = 0; $i < $length; $i++)
	{
	    $code .= $characters[rand(0, $charactersLength - 1)];
	}
	$this->code = $code;
    }
}
