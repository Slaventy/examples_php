<?php
require "Worker2.php";
//2. Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000.
//3. Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.
$obj1 = new Worker2();
$obj2 = new Worker2();

$obj1->setName("Иван");
$obj1->setAge(25);
$obj1->setSalary(1000);

$obj2->setName("Вася");
$obj2->setAge(26);
$obj2->setSalary(2000);

print("Сумма зарплат Ивана и Васи ").($obj1->getSalary()+$obj2->getSalary())."\n";
print("Сумма возрастов Ивана и Васи ").($obj1->getAge()+$obj2->getAge())."\n";
