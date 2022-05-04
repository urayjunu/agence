<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ConsultorController extends Controller
{
    public function index(){
        
        $consultores =  DB::table('CAO_USUARIO')
        ->join('PERMISSAO_SISTEMA','CAO_USUARIO.CO_USUARIO', '=' , 'PERMISSAO_SISTEMA.CO_USUARIO')
        ->where('PERMISSAO_SISTEMA.CO_SISTEMA','=',1)
        ->where('PERMISSAO_SISTEMA.IN_ATIVO','=','S')
        ->whereIn('PERMISSAO_SISTEMA.CO_TIPO_USUARIO', [0, 1, 2])
        ->get();
      	//  $date_day = date('Y')."/".date('m')."/".date('d');
				//dd($consultores);        
        return view('Consultor.index')->with(compact('consultores'));
    }

    public function consultorRel(){
    	
    	$list2 = array();
    	$receita_liquida = array();
    	$consultores =  DB::table('CAO_USUARIO')
        ->join('PERMISSAO_SISTEMA','CAO_USUARIO.CO_USUARIO', '=' , 'PERMISSAO_SISTEMA.CO_USUARIO')
        ->where('PERMISSAO_SISTEMA.CO_SISTEMA','=',1)
        ->where('PERMISSAO_SISTEMA.IN_ATIVO','=','S')
        ->whereIn('PERMISSAO_SISTEMA.CO_TIPO_USUARIO', [0, 1, 2])
        ->get();

    	$receita =  DB::table('CAO_OS')
    	->select(DB::raw('SUM(CAO_FATURA.valor-cao_fatura.TOTAL_IMP_INC) as valor'),'CAO_FATURA.data_emissao')
        ->join('CAO_FATURA','CAO_OS.CO_OS', '=' , 'CAO_FATURA.CO_OS')
        ->join('CAO_CLIENTE','CAO_FATURA.CO_CLIENTE', '=' , 'CAO_CLIENTE.CO_CLIENTE')
        ->where('CAO_OS.CO_USUARIO','=','carlos.arruda')
        ->groupBy('CAO_FATURA.data_emissao')
        ->get();

      	foreach ($consultores as $value){
			for ($i=1; $i <= @$_POST['aux'] ; $i++) { 
				$consultor = 'consultor_'.$i;
				if($value->co_usuario == $_POST[$consultor]){
					$list2[] = array('co_usuario' => $value->co_usuario, 'no_usuario' => $value->no_usuario);
				}				
			}
      	}

      	// consulta de para receita liquida
      	foreach ($list2 as $list) {
			$receita =  DB::table('CAO_OS')
	    	->select(DB::raw('SUM(CAO_FATURA.valor-cao_fatura.TOTAL_IMP_INC) as valor'),'CAO_FATURA.data_emissao')
	        ->join('CAO_FATURA','CAO_OS.CO_OS', '=' , 'CAO_FATURA.CO_OS')
	        ->join('CAO_CLIENTE','CAO_FATURA.CO_CLIENTE', '=' , 'CAO_CLIENTE.CO_CLIENTE')
	        ->where('CAO_OS.CO_USUARIO','=',$list['co_usuario'])
	        ->groupBy('CAO_FATURA.data_emissao')
	        ->get();      		
      		foreach ($receita as $rec) {
  				$receita_liquida[] = array('receita_liquida' => $rec->valor, 'data_emissao' => $rec->data_emissao, 'co_usuario' => $list['co_usuario'], 'no_usuario' => $list['no_usuario'] );     			
      		}
      	}

        return view('Consultor.desem_consultor_rel')->with(compact('consultores','list2'));
    }
}
