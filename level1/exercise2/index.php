<?php
 include('classes/Rectangle.php');
 include('classes/Tringle.php');
 
   $rectangle = new Rectangle(5,5); 
   $triangle= new Triangle(3,4);
   echo "This Tringles has" . " ". $triangle->area() . " "."of area".PHP_EOL; 
   echo "This Rectangle has" . " ". $rectangle->area() . " "."of area".PHP_EOL;
?>