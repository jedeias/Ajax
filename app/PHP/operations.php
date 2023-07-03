<?php

Class Operations{
    
    function sumCheack(array $array) : void{
        
        $input = $array["value1"]; 
        $input2 = $array["value2"]; 
        $result = $array["calc"]; 

        $sum = $input + $input2;

        if($sum == $result){
            echo json_encode("The sume of $input + $input2 is = $result is this correct");
        }else{
            echo json_encode("$result was wrong, the sum of $input + $input2 is $sum");
        }

    }

}

?>