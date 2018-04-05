<?php

class ContractManager
{
    private $db;    // Instance de la PDO

    // Constructeur

    public function __construct()
    {
        $this->setDb();
    }

    // CRUD

    public function add(Contract $contract)
    {
        $q = $this->db->prepare('INSERT INTO contract(id, type, booking_code) VALUES(:id, :type, :booking_code)');
        $q->execute(array(
            'id' => $contract->id(),
            'type' => $contract->type(),
            'booking_code' => $contract->booking_code() 
        ));
        $q->closeCursor();
    }

    public function delete(Contract $contract)
    {
        $q = $this->db->prepare('DELETE FROM contract WHERE id = :id');
        $q->execute(array(
            'id' => $contract->id()
        ));
        $q->closeCursor();
    }

    public function getById($id)
    {
        $q = $this->db->prepare('SELECT * FROM contract WHERE id = :id');
        $q->execute(array(
            'id' => $id
        ));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $q->closeCursor();

        return new Contract($data);
    }

    public function getByBookingCode($booking_code)
    {
        $q = $this->db->prepare('SELECT * FROM contract WHERE booking_code = :booking_code');
        $q->execute(array(
            'booking_code' => $booking_code
        ));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $q->closeCursor();

        return new Contract($data);
    }

    public function getFullList()
    {
        $contracts = [];
        $q = $this->db->query('SELECT * FROM contract ORDER BY id');

        while ($data = $q->fetch(PDO::FETCH_ASSOC))
        {
            $contracts[] = new Contract($data);
        }

        return $contracts;

        $q->closeCursor();
    }

    public function update(Contract $contract)
    {
        $q = $this->db->prepare('UPDATE contract SET type = :type, booking_code = :booking_code WHERE id = :id');
        $q->execute(array(
            'id' => $contract->id(),
            'type' => $contract->type(),
            'booking_code' => $contract->booking_code(),
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