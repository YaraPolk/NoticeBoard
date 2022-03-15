<?php

session_start();

use Programmer\Programmer;

$employee = new Programmer();

$employee->setAge(25);
$employee->setName('John');
$employee->setSalary(1500);
$employee->setLangs(['php', 'js', 'python'])->getLangs();
echo $employee->getSalary();
$employee->addOneYear();
echo $employee->getAge();
$employee->checkAge();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Notice Board</title>
</head>
<body>

</body>
</html>

