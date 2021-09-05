<?php

namespace App\Models;

class StudentModel extends BaseModel
{
    protected $table = "students";

    public function __construct()
    {
        parent::__construct($this->table);
    }
}