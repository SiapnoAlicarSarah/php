<?php 
use App\Models\Student;
use App\Models\Teacher;
// require_once __DIR__."/App/Models/Student.php";
// require_once __DIR__."/App/Models/Teacher.php";
spl_autoload_register(function($class){
    $prefix="App\\";
    if(strpos($class, $prefix)!==0){
        return false;
    }
    //before "/App/Models/Teacher.php";
    $class = substr($class, strlen($prefix));
    $class = str_replace("\\", "/", $class);
    //after "/Models/Teacher.php";
    $file = __DIR__."/App/".$class.".php";
    if(file_exists($file)){
        require_once $file;
    }
});
$student = new Student("Alicar", "24-0943-760");
$teacher = new Teacher("Jerico", "OOP");
echo $student->showDetails();
echo "\n";
echo $teacher->showDetails();

?>