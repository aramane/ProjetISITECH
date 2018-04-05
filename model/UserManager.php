<?php

class UserManager
{
    private $db;// Instance de PDO

    //Constructor
    
    public function __construct()
    {
        $this->setDb();
    }
    
    //CRUD

    public function add(User $user)
    {
        $q = $this->db->prepare('INSERT INTO user(address, email, name, firstName, type, phone, premium, id_authentification) VALUES(:address, :email, :name, :firstName, :type, :phone, :premium, :id_authentification)');
        $q->execute(array(
            'address' => $user->address(),
            'email' => $user->email(),
            'name' => $user->name(),
            'firstName' => $user->firstName(),
            'type' => $user->type(),
            'phone' => $user->phone(),
            'premium' => $user->premium(),
            'id_authentification' => $user->id_authentification()
        ));
        $q->closeCursor();
    }
    

    public function delete(User $user)
    {
        $q = $this->db->prepare('DELETE FROM user WHERE id = :id');
        $q->execute(array(
            'id' => $user->id()
        ));
        $q->closeCursor();
    }

    public function get($id)
    {
        $q = $this->db->prepare('SELECT * FROM user WHERE id = :id');
        $q->execute(array(
            'id' => $id
        ));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $q->closeCursor();

        return new User($data);
    }

    public function getFullList()
    {
        $users = [];

        $q = $this->db->query('SELECT * FROM user ORDER BY name');

        while ($data = $q->fetch(PDO::FETCH_ASSOC))
        {
            $users[] = new User($data);
        }

        return $users;
        
        $q->closeCursor();
    }
    
    public function getByEmail($email)
    {
        $q = $this->db->prepare('SELECT * FROM user WHERE email = :email');
        $q->execute(array(
            'email' => $email
        ));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $q->closeCursor();

        if(!empty($data))
        {
            return new User($data);
        }
        else
        {
            return false;
        }       
    }
    
    public function userExists(User $user)
    {
        $q = $this->db->prepare("SELECT COUNT(*) FROM user WHERE email = :email");
        $q->execute(array(
            'email' => $user->email()
        ));
        $data = $q->fetch();
        $q->closeCursor();
        
        if($data[0] == 0)
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    public function update(User $user)
    {
        $q = $this->db->prepare('UPDATE user SET address = :address, email = :email, name = :name, firstName = :firstName, type = :type, phone = :phone, premium = :premium, id_authentification = :id_authentification WHERE id = :id');
        $q->execute(array(
            'address' => $user->address(),
            'email' => $user->email(),
            'name' => $user->name(),
            'firstName' => $user->firstName(),
            'type' => $user->type(),
            'phone' => $user->phone(),
            'premium' => $user->premium(),
            'id_authentification' => $user->id_authentification(),
            'id' => $user->id()
        ));
        $q->closeCursor();
    }
    
    public function checkConnexion(User $user)
    {
        $q = $this->db->prepare('SELECT COUNT(*) FROM user WHERE BINARY email = :email AND BINARY password = :password');
        $q->execute(array(
            'email' => $user->email(),
            'password' => $user->password()
        ));
        $data = $q->fetch();
        $q->closeCursor();
        
        if($data[0] == 0)
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    public function setDb()
    {
        $db = new Database();
        
        $this->db = $db->setPDO();
    }
}