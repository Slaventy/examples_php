<?php
require "Worker3.php";
$obj1 = new Worker3();
$obj2 = new Worker3();

$obj1->setName("Иван");
$obj1->setAge(25);
$obj1->setSalary(1000);

$obj2->setName("Вася");
$obj2->setAge(206);
$obj2->setSalary(2000);

print("Сумма зарплат Ивана и Васи ").($obj1->getSalary()+$obj2->getSalary())."\n";
print("Сумма возрастов Ивана и Васи ").($obj1->getAge()+$obj2->getAge())."\n";