<?php
class Employee { 
    public $name;
    public $salary;

    function initialize ($name, $salary) {  
        $this -> name = $name;
        $this -> salary = $salary;
    }

    function print(){             
        if($this->salary >= 6000 ){
          echo $this -> name . ", you will need to pay taxes" . PHP_EOL;
        }
        else{
            echo $this -> name . ", you dont need to pay taxes" .PHP_EOL;
        }
    }
}
?>