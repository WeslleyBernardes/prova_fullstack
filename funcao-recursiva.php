<?php
function verDiv($number = null) {
    $result = true;
    $smaller = array();
    if(is_null($number)) {
        for ($i=100 ; $i > 0; $i--) {
           $dividend = $i;       
            $operation_result = verDiv($dividend);

            if(!$operation_result){

                $result = false;
            } 
            if($result){        
                $valores = '';
                foreach([1,2,3] as $value){
                    $valores  .=  " {$value} e";
                }
                $valores = rtrim($valores,'e');
                $smaller[$i] = "O {$dividend} é o menor número inteiro positivo divisível por {$valores}.<br/><br/>";
            }
            $result = true;      
        }
        echo end($smaller);
    } else {
        $divisibilidade = true;
        if(($number % 2) > 0 ){
            $divisibilidade = false;
        }
        if(($number % 3) > 0 ){
            $divisibilidade = false;
        }
        if(($number % 10) > 0 ){
            $divisibilidade = false;
        }
        return $divisibilidade;
    }
}
 verDiv();

