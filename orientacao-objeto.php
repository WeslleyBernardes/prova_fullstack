<?php
class multiplique {

    //Propriedades
    protected $valor1;
    protected $valor2;
    protected $valor3;
    
    //Metodos
    function get_valor1() {
        return $this->valor1;
      }
    function get_valor2() {
        return $this->valor2;
    }
    function get_valor3() {
        return $this->valor3;
    }

    function set_valor1($valor) {
        $this->valor1 = $valor;
    }
    function set_valor2($valor) {
        $this->valor2 = $valor;
    }
    function set_valor3($valor) {
        $this->valor3 = $valor;
    }

    function multiplique (){

        $result = $this->valor1 * $this->valor2 * $this->valor3;
        return $result;
    }


}

$multiplique = new multiplique();
$multiplique->set_valor1(2);
$multiplique->set_valor2(3);
$multiplique->set_valor3(2);


echo "Resultado: {$multiplique->multiplique()}";
echo"<pre>"; 
    var_dump($multiplique);
echo"<pre>"; 
