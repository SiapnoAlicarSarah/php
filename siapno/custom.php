<?php 

class InvalidEmailException extends Exception {}
class InvalidPasswordException extends Exception {}


try {
    $email = "jeric12@gmail.com";
    $password = "12345678";
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        throw new InvalidEmailException("Invalid Email Format");
    }
    if(strlen($password)<8){
        throw new InvalidPasswordException("Password must be 8 character length");
    }
}
catch(InvalidEmailException $e) {
    echo $e->getMessage();

}
catch(InvalidPasswordException $e){
    echo $e->getMessage();
}









?>