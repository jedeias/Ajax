<?php

$names = array(
    'João',
    'Maria',
    'Pedro',
    'Ana',
    'Carlos',
    'Laura',
    'Rafael',
    'Isabela',
    'Miguel',
    'Luiza'
);

if (empty($names)) {
    echo "The array is empty.";
} else {
    foreach ($names as $name) {
        echo $name . '<br>';
    }
}

if(!$names === array()){
    echo"There is an error in the array.php file. The file does not have an array.";
}

?>