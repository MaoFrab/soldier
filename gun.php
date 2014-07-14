<?php

class gun {
    public $classOfGun;
    public $numberOfBullets;

    public function __construct($class_Of_Gun){
        $this->classOfGun = $class_Of_Gun;

        switch($class_Of_Gun) {
            case "pistol":
                $this->numberOfBullets = 7;
                break;
            case "rifle":
                $this->numberOfBullets = 5;
                break;
            case "uzi":
                $this->numberOfBullets = 30;
                break;
        }
    }
} 