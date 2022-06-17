<?php

// General class

class basketballPlayer {
    //Properties
    public $name;
    public $age;
    public $gender;
    public $active = "Yes";

    //construct
    public function __construct($name, $age, $gender){
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    //destruct
    public function __destruct()
    {
        echo "Deleted player";
    }

    //Methods
    public function introduction(){
        echo "My name is " . $this->name . ", I am a " . $this->gender . " and I am " . $this->age . " years old.";
    }

    public function jump(){
        echo "I am jumping!";
    }

    public function shoot(){
        echo "I am shooting the ball!";
    }

    public function defense() {
        echo "I am defending!";
    }
}

$player1 = new basketballPlayer("Victor", "27", "man");



// -------------------------- class that inherits the base class. -------------------------------------

class pointGuard extends basketballPlayer {
    //adding 1 property and 1 method
    public static $ability = "Passing";

    public function pass(){
        echo "I am pasing the ball!";
    }

    //overriding 1 property and 1 method
    public $active = "No";

    public function jump(){
        echo "I am trying to jump, but I am retired.";
    }
}

$player2 = new pointGuard("Pepe", "44", "man");