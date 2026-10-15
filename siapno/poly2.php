<?php 
class eDevice {
    public function power(){
        echo "Device is Powered on\n";
    }
}
class tv extends eDevice {
    public function power() {
        echo "Tv is powered on\n";
    }
}
class aircon extends eDevice {
    public function power() {
        echo "Aircon is powered on\n";
    }
}
class speaker extends eDevice {
    public function power() {
        echo "Speaker is powered on\n";
    }
}
$devices = [new tv(), new aircon(), new speaker()];
foreach($devices as $device){
    $device->power();
}













?>