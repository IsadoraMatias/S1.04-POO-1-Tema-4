<?php
// CREo la clase Employee
// DEFINo una función con nombre y salario como parametros
class Employee { //atributos de clase
    public $name;
    public $salary;

    function personalData($name, $salary) {  //metodo para recebir los datos
        $this -> name = $name;
        $this -> salary = $salary;
    }

    function taxes(){             //verifico si necesita pagar impuestos o no
        if($this->salary >= 6000 ){
          echo $this -> name . ", you will need to pay taxes" . PHP_EOL;
        }
        else{
            echo $this -> name . ", you dont need to pay taxes" .PHP_EOL;
        }
    }
}

// Llamo la clase
$employee = new Employee();
$employee -> personalData("Clara", 3000);
$employee -> taxes();

//Ejercicio 2

//Primero necesito una clase con las propriedades largura y altura y un metodo
//las subclases heredarán el metodo de la clase madre y cada una tendrá su proprio metodo de calculo
class Shape{
    public $height;
    public $width;

    public function __construct($height,$width){
       $this-> height = $height;
        $this-> width = $width;
    }
}

// Creo subclases que heredarán las propriedades de Shape 
//y cada subclase tendrá su calculo de area dentro de un metodo
// Aceso a las proprieades heredadas con $this->
class Rectangle extends Shape {
  public function area(){
     return $this -> width * $this -> height;
  }
   }
   class Triangle extends Shape {
    public function area(){
        return ($this -> width * $this -> height) / 2;
        }
   }
   $rectangle = new Rectangle(5,5); 
   $triangle= new Triangle(3,4);
   echo "Ejercicio 2".PHP_EOL;
   echo "This Tringles has" . " ". $triangle->area() . " "."of area".PHP_EOL; //Utilizo La variable que heredó las propriedades para llamar el metodo
   echo "This Rectangle has" . " ". $rectangle->area() . " "."of area".PHP_EOL;

?>