<?php

class Worker {
    public $name;    //имя
    public $age;     //возраст
    public $salary;  //зарплата

    function addFields($name, $age, $salary){
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
}