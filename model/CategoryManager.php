<?php

class CategoryManager
{
    private $db;    // Instance de la PDO

    // Constructeur

    public function __construct()
    {
        $this->setDb();
    }

    // CRUD

    public function add(Category $category)
    {
        $q = $this->db->prepare('INSERT INTO category(id, name, description) VALUES(:id, :name, :description)');
        $q->execute(array(
            'id' => $category->id(),
            'name' => $category->name(),
            'description' => $category->description()
        ));
        $q->closeCursor();
    }

    public function delete(Category $category)
    {
        $q = $this->db->prepare('DELETE FROM category WHERE id = :id');
        $q->execute(array(
            'id' => $category->id()
        ));
        $q->closeCursor();
    }

    public function get($id)
    {
        $q = $this->db->prepare('SELECT * FROM category WHERE id = :id');
        $q->execute(array(
            'id' => $id
        ));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $q->closeCursor();

        return new Category($data);
    }

    public function getFullList()
    {
        $categorys = [];

        $q = $this->db->query('SELECT * FROM category ORDER BY id');

        while ($data = $q->fetch(PDO::FETCH_ASSOC))
        {
            $categorys[] = new Category($data);
        }

        return $categorys;

        $q->closeCursor();
    }

    public function update(Category $category)
    {
        $q = $this->db->prepare('UPDATE category SET name = :name, description = :description WHERE id = :id');
        $q->execute(array(
            'id' => $category->id(),
            'name' => $category->name(),
            'description' => $category->description()
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