<?php 
namespace App\Models;
class Student {
    public function __construct(
        private string $name,
        private string $id

    ){}
    public function showDetails(){
        return "$this->name with $this->id";
    }
}







?>