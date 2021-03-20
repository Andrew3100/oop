<?php

class Car {
    /*Область видимости*/

    public $name =  4; //Свойство автомобиля как объекта - имя
    public $color = 'red'; //Цвет автомобиля
    public $brand   ; //Марка
    public $year = 2020   ; //Год

    /*Объявление метода*/
    public function GetCarInfo() {
        $get_car_info ="<h3>О моём автомобиле:</h3><br>
        Марка: $this->brand<br>
        ГВ: $this->year<br>
        Цвет: $this->color<br>";
        return $get_car_info;
    }

}