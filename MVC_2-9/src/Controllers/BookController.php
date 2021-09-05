<?php
namespace App\Controllers;
use App\Models\BookModel; 

class BookController extends BaseController
{
    protected $model;


    public function __construct(){
        $this->model = new BookModel();
        parent::__construct($this->model);
    }
    

    public function index(){
        $books = parent::index();
        include "src/Views/Book/list.php";
        
    }

    public function store()
    {
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            include "src/Views/Book/create.php";
        } else {
            $data = [
                "name" => $_POST["name"],
                "author" => $_POST["author"],
                "category" => $_POST["category"],
                "desc" => $_POST["desc"],
            
            ];
            $this->model->store($data);
            header("Location:index.php?page=book-list");
        }
        
    }

    public function delete($id) {
        $this->model->delete($id);
        header("Location:index.php?page=book-list");
    }

    public function update($id) {

        if($_SERVER["REQUEST_METHOD"] == "GET"){
            $book = $this->model->getById($id);
            include "src/Views/Book/update.php";
        } else {
            $data = [
                "name" => $_POST["name"],
                "author" => $_POST["author"],
                "category" => $_POST["category"],
                "desc" => $_POST["desc"],
            
            ];
            $this->model->update($id, $data);
            header("Location:index.php?page=book-list");
        }
    }


    public function search($keyword){
        $books = $this->model->search($keyword);
        include "src/Views/Book/list.php";
    }

}