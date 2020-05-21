<?php
$statesAcronym  = ['ES', 'MG', 'RJ', 'SP'];
$statesName         = ['São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo'];  


$states = array_flip($statesAcronym);

foreach($states as $key => $value){
    $states[$key] = "";
    foreach($statesName as $uf){
        $string = preg_split("/\s+/", "{$uf}");
        $sigla = substr($string[0], 0, 1);
        if(count($string) > 2) {
            $sigla = $sigla . substr($string[2], 0, 1);
        } else {
            $sigla = $sigla . substr($string[1], 0, 1);
        }
        $states[$sigla] = $uf;
    }
}

echo '<pre>';
var_dump([$statesAcronym,$statesName,$states]);
echo '</pre>';