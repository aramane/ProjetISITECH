<?php

class InspectionManager
{
    private $db;    // Instance de la PDO

    // Constructeur

    public function __construct()
    {
        $this->setDb();
    }

    // CRUD

    public function add(Inspection $inspection)
    {
        $q = $this->db->prepare('INSERT INTO inspection(id, constat, date, inspector, mileage, fuel, id_car) VALUES(:id, :constat, NOW(),
         :inspector, :mileage, :fuel, :id_car)');
        $q->execute(array(
            'id' => $inspection->id(),
            'constat' => $inspection->constat(),
            // 'date' => $inspection->date(),
            'inspector' => $inspection->inspector(),
            'mileage' => $inspection->mileage(),
            'fuel' => $inspection->fuel(),
            'id_car' => $inspection->id_car()
        ));
        $q->closeCursor();
    }

    public function delete(Inspection $inspection)
    {
        $q = $this->db->prepare('DELETE FROM inspection WHERE id = :id');
        $q->execute(array(
            'id' => $inspection->id()
        ));
        $q->closeCursor();
    }

    public function get($id)
    {
        $q = $this->db->prepare('SELECT * FROM inspection WHERE id = :id');
        $q->execute(array(
            'id' => $id
        ));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $q->closeCursor();

        return new Inspection($data);
    }

    public function getFullList()
    {
        $inspections = [];
        $q = $this->db->query('SELECT * FROM inspection ORDER BY id');

        while ($data = $q->fetch(PDO::FETCH_ASSOC))
        {
            $inspections[] = new Inspection($data);
        }

        return $inspections;

        $q->closeCursor();
    }

    public function update(Inspection $inspection)
    {
        $q = $this->db->prepare('UPDATE inspection SET constat = :constat, date = NOW(), inspector = :inspector, mileage = :mileage, 
        fuel = :fuel, id_car = :id_car WHERE id = :id');
        $q->execute(array(
            'id' => $inspection->id(),
            'constat' => $inspection->constat(),
            'inspector' => $inspection->inspector(),
            'mileage' => $inspection->mileage(),
            'fuel' => $inspection->fuel(),
            // 'date' => $inspection->date(),
            'id_car' => $inspection->id_car()
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