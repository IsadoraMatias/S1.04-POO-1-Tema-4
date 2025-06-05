<?php
include('class/Employee.php');
$employee1 = new Employee("Clara", 8000);
$employee2 = new Employee("Carlos", 6000);
$employee1 -> printTaxes();
$employee2 -> printTaxes();
?>