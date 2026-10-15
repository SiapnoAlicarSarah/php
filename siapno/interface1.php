<?php 
interface Person {
    public function introduce();
}
class Patrick {
    public function introduce() {
        echo "I am sir Patrick\n";
    }

}
class Jerico {
    public function introduce() {
        echo "I am sir Jerico";
    }
}
$loop = [new Patrick(), new Jerico()];
foreach($loop as $person){
    $person->introduce();
}





?>