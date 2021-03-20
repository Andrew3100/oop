<?php
require_once 'classes/FirstClass.php';

$object = new Car();

$car1 = new Car();
$car2 = new Car();

function debug($data) {
    echo '<pre>'.print_r($data,1).'</pre>';
}


$car1->color = 'чёрный';
$car1->brand = 'mustang';
$car2->color = 'Белый';
$car2->brand = 'mustang';

echo $car1->GetCarInfo();
echo $car2->GetCarInfo();