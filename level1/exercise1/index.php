<?php
include('class/Employee.php');
$employee = new Employee();
$employee -> initialize("Clara", 2000);
$employee -> print();
?>