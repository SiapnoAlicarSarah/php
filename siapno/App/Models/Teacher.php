<?php 
namespace App\Models;
class Teacher {
    public function __construct(
        private string $name,
        private string $teaches

    ){}
    public function showDetails(){
        return "$this->name with $this->teaches";
    }
}







?>