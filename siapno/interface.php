<?php 
interface paymentMethod {
    const currency = "PHP"; #constant
    public function pay($amount);
    public function refund($amount);
}
class gcash implements paymentMethod {
    public function pay($amount) {
        echo "Paid $amount ".static::currency." using Gcash"; #using constants
    }
    public function refund($amount) {
        echo "\nRefunded $amount using Gcash";
    }
}

class debitCard implements paymentMethod {
    public function pay($amount) {
        echo "\nPaid $amount using Debit Card";
    }
    public function refund($amount) {
        echo "\nRefunded $amount using Debit Card";
    }
}





$p1 = new gcash();
$p1->pay(100);
$r1 = new gcash();
$r1->refund(1000);
$d1 = new debitCard();
$d1->pay(100);














?>