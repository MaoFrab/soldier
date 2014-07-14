<?php
/**
 * Created by PhpStorm.
 * User: alexey
 * Date: 11.07.14
 * Time: 22:41
 */

//namespace shootingRange;


class User {

    public function shot($gun, $numberOfShots){
        $numberOfMagazine = 0;
        for($i = 0; $i <= $numberOfShots; $i++){

            $gun->numberOfBullets--;
            if($gun->numberOfBullets <= 0){
                $this->reload($gun);
                $numberOfMagazine++;
            }
        }
        echo "Soldier did $numberOfShots shots, changed $numberOfMagazine magazine <br>";
    }

    public function reload($gun){

        switch($gun->classOfGun){
            case "pistol":
                $gun->numberOfBullets = 7;
                break;
            case "rifle":
                $gun->numberOfBullets = 5;
                break;
            case "uzi":
                $gun->numberOfBullets = 30;
                break;
        }
    }
        //if($gun instanceof pistol) $gun->numberOfBullets = 7;
        //    elseif($gun instanceof rifle) $gun->numberOfBullets = 5;
        //        else $gun->numberOfBullets = 30;
        //}
} 