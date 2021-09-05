<?php
namespace App\Controllers;
use App\Models\StudentModel;
class StudentController extends BaseController
{
    protected $model;


    public function __construct(){
        $this->model = new StudentModel();
        parent::__construct($this->model);
    }
    

    public function index(){
        $students = parent::index();
        include "src/Views/Student/list.php";
        
    }

    public function search($keyword){
        $students = $this->model->search($keyword);
        include "src/Views/Student/list.php";
    }


}