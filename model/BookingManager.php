<?php

class BookingManager
{
    private $db;    // Instance de PDO

    // Constructeur

    public function __construct()
    {
        $this->setDb();
    }

    // CRUD

    public function add(Booking $booking)
    {
        $q = $this->db->prepare('INSERT INTO booking(id_car, id_user, departureAgency, departureDate, endingDate, code) VALUES(:id_car, :id_user, :departureAgency, :departureDate, :endingDate, :code)');
        $q->execute(array(
            'id_car' => $booking->id_car(),
            'id_user' => $booking->id_user(),
            'departureAgency' => $booking->departureAgency(),
            'departureDate' => $booking->departureDate(),
            'endingDate' => $booking->endingDate(),
            'code' => $booking->code()
        ));
        $q->closeCursor();
    }

    public function delete(Booking $booking)
    {
        $q = $this->db->prepare('DELETE FROM booking WHERE code = :code');
        $q->execute(array(
            'code' => $booking->code()
        ));
    }

    public function get($code)
    {
        $q = $this->db->prepare('SELECT * FROM booking WHERE code = :code');
        $q->execute(array(
            'code' => $code
        ));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $q->closeCursor();

        return new Booking($data);
    }

    public function getFullList()
    {
        $bookings = [];
        
        $q = $this->db->query('SELECT * FROM booking ORDER BY code');

        while ($data = $q->fetch(PDO::FETCH_ASSOC))
        {
            $bookings[] = new Booking($data);
        }
        return $bookings;
        $q->closeCursor();
    }

    public function update(Booking $booking)
    {
        $q = $this->db->prepare('UPDATE booking SET id_car = :id_car, id_user = :id_user, departureAgency = :departureAgency, departureDate = :departureDate, endindDate = :endingDate WHERE code = :code');
        $q->execute(array(
            'id_car'            => $booking->id_car(),
            'id_user'           => $booking->id_user(),
            'departureAgency'   => $booking->departureAgency(),
            'departureDate'     => $booking->departureDate(),
            'endingDate'        => $booking->endingDate(),
            'code'              => $booking->code()
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