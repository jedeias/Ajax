<?php

    require_once ("operations.php");

    if (empty($_POST)){
        
        header('Content-Type: application/json');
        
        echo die(json_encode("Request failed because no have input")); 
    }

    if (isset($_POST["class"]) && isset($_POST["method"])){

        $className = $_POST["class"];
        $methodName = $_POST["method"];

        require_once ("$className.php");
    }else{
        header('Content-Type: application/json');
        echo die(json_encode("Request failed because no class name and method specified")); 
    }

    $class = new $className();

    $class->$methodName($_POST);

?>