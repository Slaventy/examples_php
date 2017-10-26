<?php
class Worker2{
    private $name;  // имя
    private $age;   // возраст
    private $salary;// зарплата

    public function setName($setName){
        $this->name = $setName;
    }
    public function getName(){
        return ($this->name);
    }
    public function setAge($setAge){
        $this->age = $setAge;
    }
    public function getAge(){
        return($this->age);
    }
    public function setSalary($setSalary){
        $this->salary = $setSalary;
    }
    public function getSalary(){
        return ($this->salary);
    }
}