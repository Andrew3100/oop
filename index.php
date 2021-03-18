<?php
require_once 'classes/FirstClass.php';

$object = new Car();

$car1 = new Car();

function debug($data) {
    echo '<pre>'.print_r($data,1).'</pre>';
}
debug($car1);

$car1->color = 'чёрный';
$car1->brand = 'mustang';

echo '<h3>О моём автомобиле:</h3><br>';
echo "Марка: $car1->brand<br>";
echo "ГВ: $car1->year<br>";
echo "Цвет: $car1->color<br>";