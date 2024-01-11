<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello</title>
</head>
<body>
    <h1>Hello</h1>
</body>
</html>
<?php

   //this is my controller

    // Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    //require the autoload file
    require_once('vendor/autoload.php');

    //instantiate the F3 base class
    $f3 = Base::instance();

    //define a default route
    $f3->route('GET /', function(){
        echo "<h1>Hello!</h1>";
    });

    //run fat-free
    $f3->run();

?>
