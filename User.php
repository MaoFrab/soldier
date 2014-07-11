<?php
/**
 * Created by PhpStorm.
 * User: alexey
 * Date: 11.07.14
 * Time: 22:41
 */

namespace shootingRange;


class User {

    public function shot($gun, $numberOfShots){
        for($i = 0; $i <= $numberOfShots; $i++){
            $numberOfMagazine = 0;

            $gun->numberOfBullets--;
            if($gun->numberOfBullets <= 0){
                $this->reload($gun);
                $numberOfMagazine++;
            }

            echo "Солдат сделал ".$i." выстрелов, поменял ".$numberOfMagazine." магазинов";
        }
    }

    public function reload($gun){
        if($gun instanceof pistol) $gun->numberOfBullets = 7;
            elseif($gun instanceof rifle) $gun->numberOfBullets = 5;
                else $gun->numberOfBullets = 30;
        }
} 