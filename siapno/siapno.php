<?php 
class Animal {
    public function makeSound(){
        echo "Animal Sound";
    }
}
class dog extends Animal {
    public function makeSound() {
        echo "aw aw\n";
    }
}
class cat extends Animal {
    public function makeSound() {
        echo "Meow\n";
    }
}
class dinosaur extends Animal {
    public function makeSound() {
        echo "ror\n";
    }
}

$arrayAnimals = [new dog(), new cat(), new dinosaur()];
foreach($arrayAnimals as $a){
    $a->makeSound();
}





?>