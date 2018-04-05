<?php

class User {

    private $id;
    private $address;
    private $email;
    private $password;
    private $name;
    private $firstName;
    private $type;
    private $phone;
    private $id_authentification;

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
    
    public function address()
    {
        return $this->address;
    }
    
    public function email()
    {
        return $this->email;
    }
    
    public function password()
    {
        return $this->password;
    }
    
    public function name()
    {
        return $this->name;
    }
    
    public function firstName()
    {
        return $this->firstName;
    }
    
    public function type()
    {
        return $this->type;
    }
    
    public function phone()
    {
        return $this->phone;
    }
    
    public function id_authentification()
    {
        return $this->id_authentification;
    }

    // setters
    
    public function setId($id) 
    {
        $this->id = $id;
    }
    
    public function setAddress($address) 
    {
        $this->address = $address;
    }
    
    public function setEmail($email) 
    {
        $this->email = $email;
    }
    
    public function setPassword($password) 
    {
        $this->password = $password;
    }
    
    public function setName($name) 
    {
        $this->name = $name;
    }
    
    public function setFirstName($firstName) 
    {
        $this->firstName = $firstName;
    }
    
    public function setType($type) 
    {
        $this->type = $type;
    }
    
    public function setPhone($phone) 
    {
        $this->phone = $phone;
    }
    
    public function setId_authentification($id_authentification) 
    {
        $this->id_authentification = $id_authentification;
    }

}
