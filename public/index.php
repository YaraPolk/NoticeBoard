<?php

spl_autoload_register(function($class){
    $root = $_SERVER['DOCUMENT_ROOT'];
    $ds = DIRECTORY_SEPARATOR;

    $url = $root . $ds . str_replace('\\', $ds, $class) . '.php';
    require_once($url);
});
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

