<?php
if (! function_exists('calculaAbono')){
    function calculaAbono($_idade) {
	    if ($_idade >=40){
	        return 800;
        }
        else {
 	        return 0;
        }
    }
}
if (! function_exists('idade')){
    function idade($_anoNascimento) {
	    $idade = date("Y") - $_anoNascimento;
	    return $idade;
    }
}
if (! function_exists('salarioFamilia')){
    function salarioFamilia($_qntFilhos) {
	    return ($_qntFilhos*30);
    }
}
if (! function_exists('salarioBruto')){
    function salarioBruto($_salarioBase, $_abono, $_salarioFamilia) {
	    return ($_salarioBase+$_abono+$_salarioFamilia);
    }
}
if (! function_exists('salarioLiquido')){
    function salarioLiquido($_salarioBruto, $_inss) {
	    return ($_salarioBruto - $_inss);
    }
}
if (! function_exists('inss')){    
    function inss ($_salarioBase) {
	    return $_salarioBase*0.08;
    }
}

?>
