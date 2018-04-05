<?php

class CaroptionManager
{
    private $db;    // Instance de la PDO

    // Constructeur

    public function __construct()
    {
        $this->setDb();
    }

    // CRUD

    public function add(Caroption $caroption)
    {
        $q = $this->db->prepare('INSERT INTO caroption(id, airbag, capacity, conditioner, passenger, permis) VALUES(:id, :airbag, :capacity, :conditioner, :passenger, :permis)');
        $q->execute(array(
            'id' => $caroption->id(),
            'airbag' => $caroption->airbag(),
            'capacity' => $caroption->capacity(),
            'conditioner' => $caroption->conditioner(),
            'passenger' => $caroption->passenger(),
            'permis' => $caroption->permis()
        ));
        $q->closeCursor();
    }

    public function delete(Caroption $caroption)
    {
        $q = $this->db->prepare('DELETE FROM caroption WHERE id = :id');
        $q->execute(array(
            'id' => $caroption->id()
        ));
        $q->closeCursor();
    }

    public function get($id)
    {
        $q = $this->db->prepare('SELECT * FROM caroption WHERE id = :id');
        $q->execute(array(
            'id' => $id
        ));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $q->closeCursor();

        return new Caroption($data);
    }

    public function getFullList()
    {
        $caroptions = [];
        $q = $this->db->query('SELECT * FROM caroption ORDER BY id');

        while ($data = $q->fetch(PDO::FETCH_ASSOC))
        {
            $caroptions[] = new Caroption($data);
        }

        return $caroptions;

        $q->closeCursor();
    }

    public function update(Caroption $caroption)
    {
        $q = $this->db->prepare('UPDATE caroption SET airbag = :airbag, capacity = :capacity, conditioner = :conditioner,
         passenger = :passenger, permis = :permis WHERE id = :id');
        $q->execute(array(
            'id' => $caroption->id(),
            'airbag' => $caroption->airbag(),
            'capacity' => $caroption->capacity(),
            'conditioner' => $caroption->conditioner(),
            'passenger' => $caroption->passenger(),
            'permis' => $caroption->permis()
        ));
    }

    // PDO
    
    public function setDb()
    {
        $db = new Database();
        
        $this->db = $db->setPDO();
    }
    
    public function db()
    {
        return $this->db;
    }
}