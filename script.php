<?php
//namespace shootingRange;

//function __autoload($className){
//    require_once $className.".php";
//}
include("gun.php");
include("User.php");

//$pistol = new pistol();
//$rifle = new rifle();
//$uzi = new uzi();

$pistol = new gun("pistol");
$rifle = new gun("rifle");
$uzi = new gun("uzi");
var_dump($pistol);
var_dump($rifle);
var_dump($uzi);

$soldier1 = new User();
$soldier2 = new User();
$soldier3 = new User();

$soldier1->shot($pistol, 30);
$soldier2->shot($rifle, 30);
$soldier3->shot($uzi, 30);
echo "End.";
?>