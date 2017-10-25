<?php
require "Worker.php";

class printClass{
    protected $Worker = array();

    public function addWorker(Worker $Work){
        $this->Worker[] = $Work;
    }

    function salaries_sum(){
        $sum = 0;
        foreach ($this->Worker as $value){
            $sum += $value['salary'];
        }
    print("Salary = " .$sum);
}

}
//Создайте объект этого класса, затем установите поля в следующие значения
// (не в __construct, а для созданного объекта) - имя 'Иван', возраст 25, зарплата 1000.
// Создайте второй объект этого класса, установите поля в следующие значения - имя 'Вася', возраст 26, зарплата 2000.
//
//Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.

$worker1 = new Worker();
$worker2 = new Worker();

$worker1->addFields("Иван", 25, 1000);
$worker2->addFields("Вася", 26, 2000);

$prnt = new printClass();
$prnt->addClass($worker1);
$prnt->addClass($worker2);

$prnt->salaries_sum();