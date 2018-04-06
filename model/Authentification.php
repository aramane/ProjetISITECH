<?php

class Authentification {

    private $id;
    private $login;
    private $password;

    public function hydrate(array $array)
    {
        foreach ($array as $key => $value) 
        {
            $method = 'set' . ucfirst($key);

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

    public function password()
    {
        return $this->password;
    }

    public function login()
    {
        return $this->login;
    }

    //setters

    public function setId($id) 
    {
        $this->id = $id;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }
    
    //methods
    
    public static function connect(User $user)
    {
        session_start();
        
        $_SESSION['id'] = $user->id();
        $_SESSION['type'] = $user->type();
        $_SESSION['name'] = $user->name();
        $_SESSION['firstName'] = $user->firstName();
        $_SESSION['premium'] = $user->premium();
    }
    
    public static function disconnect()
    {
        session_start();
        session_unset();
        session_destroy();
    }
}
