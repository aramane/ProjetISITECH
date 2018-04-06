<?php

class CarManager
{
    private $db;// Instance de PDO

    //Constructor
    
    public function __construct()
    {
        $this->setDb();
    }
    
    //CRUD

    public function add(Car $car)
    {
        $q = $this->db->prepare('INSERT INTO car(registration, name, color, model, brand, url, price, id_option, id_category) VALUES(:registration, :name, :color, :model, :brand, :url, :price, :id_option, :id_category)');
        $q->execute(array(
            'registration' => $car->registration(),
            'name' => $car->name(),
            'color' => $car->color(),
            'model' => $car->model(),
            'brand' => $car->brand(),
            'url' => $car->url(),
            'price' => $car->price(),
            'id_option' => $car->id_option(),
            'id_category' => $car->id_category()
        ));
        $q->closeCursor();
    }
    

    public function delete(Car $car)
    {
        $q = $this->db->prepare('DELETE FROM car WHERE id = :id');
        $q->execute(array(
            'id' => $car->id()
        ));
        $q->closeCursor();
    }

    public function get($id)
    {
        $q = $this->db->prepare('SELECT * FROM car WHERE id = :id');
        $q->execute(array(
            'id' => $id
        ));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $q->closeCursor();

        return new Car($data);
    }

    public function getFullList()
    {
        $cars = [];

        $q = $this->db->query('SELECT * FROM car ORDER BY brand, model');

        while ($data = $q->fetch(PDO::FETCH_ASSOC))
        {
            $cars[] = new Car($data);
        }

        return $cars;
        
        $q->closeCursor();
    }

    public function getByCategory($category)
    {
        $cars = [];

        $q = $this->db->prepare('SELECT * FROM car INNER JOIN caroption ON car.id_option = caroption.id WHERE car.id_category=:category');
        $q->execute(array(
            'category' => $category
        ));

        while ($data = $q->fetch(PDO::FETCH_ASSOC))
        {
            $cars[] = new Car($data);
        }

        return $cars;

        $q->closeCursor();
    }

    public function update(Car $car)
    {
        $q = $this->db->prepare('UPDATE car SET registration = :registration, name = :name, color = :color, model = :model, brand = :brand, url = :url, price = :price, id_option = :id_option, id_category = :id_category WHERE id = :id');
        $q->execute(array(
            'registration' => $car->registration(),
            'name' => $car->name(),
            'color' => $car->color(),
            'model' => $car->model(),
            'brand' => $car->brand(),
            'url' => $car->url(),
            'price' => $car->price(),
            'id_option' => $car->id_option(),
            'id_category' => $car->id_category(),
            'id' => $car->id()
        ));
        $q->closeCursor();
    }

    public function setDb()
    {
        $db = new Database();
        
        $this->db = $db->setPDO();
    }

}