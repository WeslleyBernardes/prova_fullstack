<?php
function multiplo($number = null) {
    $loop = 1000;
    $result = true;
    $smaller = array();
    $total = 0;
    if(is_null($number)) {
        for ($i=1 ; $i < $loop; $i++) {
           $dividend = $i;       
            $operation_result = multiplo($dividend);
            if(!$operation_result){

                $result = false;
            } 
            if($result){        
                $valores = '';
                foreach([3,5] as $value){
                    $valores  .=  " {$value} e";
                }
                $valores = rtrim($valores,'e');
                $total = $total + $dividend;
                $smaller[$i] = "O {$dividend} é o menor número inteiro positivo divisível por {$valores}.<br/><br/>";
            }
            $result = true;      
        }
        echo 'Total:' . $total;

        foreach($smaller as $key => $content){
            //echo "{$key}<br/>";
        }
    } else {
        $mult = false;

            //echo 'Resultado::' . $number . '<br/>';
            if ($number % 3 == 0 || $number % 5 == 0){
                $mult = true;
            }
        
        return $mult;
    }
}
multiplo();

