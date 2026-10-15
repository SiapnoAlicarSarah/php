<?php 
abstract class Animal {
    abstract public function makeSound();
}
class dog extends Animal {
    public function makeSound() {
        echo "aw aw";
    }
}
class cat extends Animal {
    public function makeSound() {
        echo "mewo";
    }
}
$d1=new dog();
$d1->makeSound();
$c1=new cat();
$c1->makeSound();
















?>