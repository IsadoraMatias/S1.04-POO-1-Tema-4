<?php
class Employee { 
    public string $name;
    public int|float $salary;

    public function __construct (string $name, int|float $salary) {  
        $this -> name = $name;
        $this -> salary = $salary;
    }

    public function printTaxes() :void {             
        if($this->salary >= 6000 ){
          echo $this -> name . ", you will need to pay taxes" . PHP_EOL;
        }
        else{
            echo $this -> name . ", you dont need to pay taxes" .PHP_EOL;
        }
    }
}
?>