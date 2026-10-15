<?php 

try {
    $conn=new PDO("mysql:host=localhost;dbname=siapno","root","");
    echo "Database is connected";

}

catch(PDOEXCEPTION $e){
    echo $e->getMessage();
}

// finally {
//     echo "This block will always execute";
// }















?>