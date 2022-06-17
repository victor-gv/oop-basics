<?php

// General class

class basketballPlayer
{
    //Properties
    public $name;
    public $age;
    public $gender;
    public $active = "Yes";

    //construct
    public function __construct($name, $age, $gender)
    {
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
    public function introduction()
    {
        echo "My name is " . $this->name . ", I am a " . $this->gender . " and I am " . $this->age . " years old.";
    }

    public function jump()
    {
        echo "I am jumping!";
    }

    public function shoot()
    {
        echo "I am shooting the ball!";
    }

    public function defense()
    {
        echo "I am defending!";
    }
}

$player1 = new basketballPlayer("Victor", "27", "man");

// -------------------------- class that inherits the base class. -------------------------------------

class pointGuard extends basketballPlayer
{
    //adding 1 property and 1 method
    public static $ability = "Passing";

    public function pass()
    {
        echo "I am pasing the ball!";
    }

    //overriding 1 property and 1 method
    public $active = "No";

    public function jump()
    {
        echo "I am trying to jump, but I am retired.";
    }
}

$player2 = new pointGuard("Pepe", "44", "man");

// -------------------------- Abstract class -------------------------------------
abstract class coach
{
    public $name;
    public $experience;

    public function __construct($name, $experience)
    {
        $this->name = $name;
        $this->experience = $experience;
    }

    //methods
    public function encourage()
    {
        echo "Come on guys, you are doing great!";
    }

    public function scold()
    {
        echo "@#@#~€¬#@|@!!!!";
    }

    abstract public function makeDecision();
}

class coach1 extends coach
{
    public $speciality;

    public function __construct($name, $experience, $speciality)
    {
        parent::__construct($name, $experience);
        $this->speciality = $speciality;
    }

    public function makeDecision()
    {
        echo "Time out please!";
    }
}

$laso = new coach1("Pablo Laso", "24 years of experience", "Defense");

// -------------------------- Interface -------------------------------------

interface athlete
{
    public function run();
    public function jump();
    public function pass();
}

class footballPlayer implements athlete
{
    public function run()
    {
        echo "I am running!";
    }

    public function pass()
    {
        echo "I am passing the ball!";
    }

    public function jump()
    {
        echo "I am jumping!";
    }
}
