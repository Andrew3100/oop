<?php

class Car {
    /*Область видимости*/

    public $name =  4; //Свойство автомобиля как объекта - имя
    public $color = 'red'; //Цвет автомобиля
    public $brand   ; //Марка
    public $year = 2020   ; //Год
    public $speed;
    public $wheels;

    public function __construct($color,$brand,$speed,$wheels)
    {
        $this->color   =   $color;
        $this->brand   =   $brand;
        $this->speed   =   $speed;
        $this->wheels  =   $wheels;
    }

    /*Объявление метода*/
    public function GetCarInfo() {
        $get_car_info =
            "<h3>О моём автомобиле:</h3><br>
        Цвет:   $this->color<br>
        Марка:      $this->brand<br>
        Скорость:    $this->speed<br>
        Количество колёс:    $this->wheels<br>";
        return $get_car_info;
    }

    public function __destruct() {
        echo '<pre>';
        var_dump($this);
        echo '</pre>';
    }


}

class FileWrite {
    public $OpenMode = 'w'; /*Режим открытия файла - для записи*/
    public $FileName = 'MyFile.txt';

    public function __construct($FileName,$OpenMode) {
        $openFile = fopen($FileName, $OpenMode);
    }
    public function FilePutContent($text,$FileName) {

        $write = file_put_contents($FileName,$text);

        return $write;
    }
    /*public function __destruct() {
        fclose($FileName);
    }*/
}