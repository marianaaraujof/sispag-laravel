<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    function calculaAbono($_idade) {
	    if ($_idade >=40){
	        return 800;
        }
        else {
 	        return 0;
        }
    }
    function idade($_anoNascimento) {
	    $idade = date("Y") - $_anoNascimento;
	    return $idade;
    }
    function salarioFamilia($_qntFilhos) {
	    return ($_qntFilhos*30);
    }
    function salarioBruto($_salarioBase, $_abono, $_salarioFamilia) {
	    return ($_salarioBase+$_abono+$_salarioFamilia);
    }
    function salarioLiquido($_salarioBruto, $_inss) {
	    return ($_salarioBruto - $_inss);
    }
    function inss ($_salarioBase) {
	    return $_salarioBase*0.08;
    }
}
