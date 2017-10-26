<?php
//1
require "Worker.php";
//2
$obj1 = new Worker2();
$obj1->name = "Иван";
$obj1->age = 25;
$obj1->salary = 1000;
//3
$obj2 = new Worker2();
$obj2->name = "Вася";
$obj2->age = 26;
$obj2->salary = 2000;
//4
print ("Сумма зарплат Ивана и Васи ").($obj1->salary+$obj2->salary)."\n";
print ("Сумма возрастов Ивана и Васи ").($obj1->age+$obj2->age)."\n";