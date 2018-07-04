<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use app\Helpers\Formulario;

class FormularioController extends Controller
{
    public function index(Request $_request) {
        $_idade = idade($_request->_anonascimento);
        $_abono = calculaAbono($_request->_idade);
        $_sfamilia = salarioFamilia($_request->_qntfilhos);
        $_sbruto = salarioBruto($_request->_salariobase,$_request->_abono,$_request->_sfamilia);
        $_inss = inss($_request->_salariobase);
        $_sliquido = salarioLiquido($_request->_sbruto,$_request->_inss);
        $variaveis = $_request;
        return view('folhasalarial', compact('_idade', '_abono', '_sfamilia', '_sbruto', '_inss', '_sliquido', 'variaveis'));
    }
}