<?php

namespace App\Models;

class BookModel extends BaseModel
{
    protected $table = "books";

    public function __construct()
    {
        parent::__construct($this->table);
    }

    public function store($data)
    {
        $sql = "INSERT INTO `books`( `name`, `author`, `category`, `description`) 
        VALUES (?,?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['name']);
        $stmt->bindParam(2, $data['author']);
        $stmt->bindParam(3, $data['category']);
        $stmt->bindParam(4, $data['desc']);
        $stmt->execute();
        
    }


    public function update($id, $data)
    {
        $sql = "UPDATE `books` SET `name`=?,`author`=?,`category`=?,`description`=? WHERE id = $id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['name']);
        $stmt->bindParam(2, $data['author']);
        $stmt->bindParam(3, $data['category']);
        $stmt->bindParam(4, $data['desc']);
        $stmt->execute();
    }


   



}
