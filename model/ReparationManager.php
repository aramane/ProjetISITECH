<?php

class ReparationManager
{
    private $db;    // Instance de la PDO

    // Constructeur

    public function __construct()
    {
        $this->setDb();
    }

    // CRUD

    public function add(Reparation $reparation)
    {
        $q = $this->db->prepare('INSERT INTO reparation(id, date, description, duration, garage, price, id_car) VALUES(:id, :date, :description, :duration, :garage, :price, :id_car)');
        $q->execute(array(
            'id' => $reparation->id(),
            'date' => $reparation->date(),
            'description' => $reparation->description(),
            'duration' => $reparation->duration(),
            'garage' => $reparation->garage(),
            'price' => $reparation->price(),
            'id_car' => $reparation->id_car(),
        ));
        $q->closeCursor();
    }

    public function delete(Reparation $reparation)
    {
        $q = $this->db->prepare('DELETE FROM reparation WHERE id = :id');
        $q->execute(array(
            'id' => $reparation->id()
        ));
        $q->closeCursor();
    }

    public function get($id)
    {
        $q = $this->db->prepare('SELECT * FROM reparation WHERE id = :id');
        $q->execute(array(
            'id' => $id
        ));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $q->closeCursor();

        return new Reparation($data);
    }

    public function getFullList()
    {
        $reparations = [];
        $q = $this->db->query('SELECT * FROM reparation ORDER BY id');

        while ($data = $q->fetch(PDO::FETCH_ASSOC))
        {
            $reparations[] = new Reparation($data);
        }

        return $reparations;

        $q->closeCursor();
    }

    public function update(Reparation $reparation)
    {
        $q = $this->db->prepare('UPDATE reparation SET date = :date, description = :description, duration = :duration, garage = :garage, price = :price, id_car = :id_car WHERE id = :id');
        $q->execute(array(
            'id' => $reparation->id(),
            'date' => $reparation->date(),
            'description' => $reparation->description(),
            'duration' => $reparation->duration(),
            'garage' => $reparation->garage(),
            'price' => $reparation->price(),
            'id_car' => $reparation->id_car(),
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