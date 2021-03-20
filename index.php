<?php
require_once 'classes/FirstClass.php';


$car1 = new Car('Чёрный','BMW',180,4);
$car2 = new Car('Ржавый','Пятёрка',220,4);

function debug($data) {
    echo '<pre>'.print_r($data,1).'</pre>';
}


echo $car1->GetCarInfo();
echo $car2->GetCarInfo();