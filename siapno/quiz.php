<?php 
interface Notification {
    public function send();
}
class EmailNotification implements Notification {
    public function send() {
        echo "Email notification sent.\n";
    }
}
class SMSNotification implements Notification {
    public function send() {
        echo "SMS notification sent.\n";
    }
}
class PushNotification implements Notification {
    public function send() {
        echo "Push notification sent.";
    }
}
$notifs = [new EmailNotification(), new SMSNotification(), new PushNotification()];
foreach($notifs as $notif){
    $notif->send();
}







?>