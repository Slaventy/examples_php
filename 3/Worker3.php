<?php
class Worker3{
    private $name;  //имя
    private $age;   //возраст
    private $salary;//зарплата

    public function setName($setName){
        $this->name = $setName;
    }
    public function getName(){
        return($this->name);
    }
    public function setAge($setAge){
        if($this->checkAge($setAge)){
            $this->age = $setAge;
        }else{
            print"Ошибка ввода возраста. Возраст больше 100 или меньше 0 лет. Возраст останется без изменений.\n";
        }
    }
    public function getAge(){
        return($this->age);
    }
    public function setSalary($setSalary){
        $this->salary = $setSalary;
    }
    public function getSalary(){
        return($this->salary);
    }
    private function checkAge($checkAge){
        if($checkAge>=100 or $checkAge<=0){
            return false;
        }else {
            return true;
        }
    }
}