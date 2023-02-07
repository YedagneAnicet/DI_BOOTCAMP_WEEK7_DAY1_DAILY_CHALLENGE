<?php 

class User2 {
    public $firstname;
    public $lastname;

    public function hello(){
        echo 'Hello ' . $this->firstname . ' ' . $this->lastname;
    }

    public function test(){
        $user1 = new User2();
        $user1->firstname = "Mel Ange Anicet";
        $user1->lastname = "Yedagne";
        $user1->hello();
    }
}

$user = new User2;
$user->test();