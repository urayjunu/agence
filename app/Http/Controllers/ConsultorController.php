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
    	/*+"co_usuario": "carlos.arruda"
      +"no_usuario": "Carlos Flávio Girão de Arruda"
      +"ds_senha": "foxgabi2004"
      +"co_usuario_autorizacao": "carlos.arruda"
      +"nu_matricula": 170221
      +"dt_nascimento": null
      +"dt_admissao_empresa": null
      +"dt_desligamento": null
      +"dt_inclusao": "1000-01-01 00:00:00"
      +"dt_expiracao": null
      +"nu_cpf": "028.638.517-13"
      +"nu_rg": "104459524"
      +"no_orgao_emissor": "IFP"
      +"uf_orgao_emissor": "RJ"
      +"ds_endereco": "Rua Paraiba 836"
      +"no_email": "carlos.arruda@agence.com.br"
      +"no_email_pessoal": "arruda.carlos@gmail.com"
      +"nu_telefone": "11-8416-5552"
      +"dt_alteracao": "1000-01-01 00:00:00"
      +"url_foto": "carlos.arruda.jpg"
      +"instant_messenger": "264453088"
      +"icq": 0
      +"msn": "arruda_cf@hotmail.com"
      +"yms": ""
      +"ds_comp_end": ""
      +"ds_bairro": ""
      +"nu_cep": ""
      +"no_cidade": ""
      +"uf_cidade": "AC"
      +"dt_expedicao": null
      +"co_tipo_usuario": 0
      +"co_sistema": 1
      +"in_ativo": "S"
      +"co_usuario_atualizacao": "carlos.arruda"
      +"dt_atualizacao": "1000-01-01 00:00:00"*/

    	$list2 = array();
    	$consultores =  DB::table('CAO_USUARIO')
        ->join('PERMISSAO_SISTEMA','CAO_USUARIO.CO_USUARIO', '=' , 'PERMISSAO_SISTEMA.CO_USUARIO')
        ->where('PERMISSAO_SISTEMA.CO_SISTEMA','=',1)
        ->where('PERMISSAO_SISTEMA.IN_ATIVO','=','S')
        ->whereIn('PERMISSAO_SISTEMA.CO_TIPO_USUARIO', [0, 1, 2])
        ->get();
		//dd($consultores);
      	foreach ($consultores as $value){
			for ($i=1; $i <= @$_POST['aux'] ; $i++) { 
				$consultor = 'consultor_'.$i;
				if($value->co_usuario == $_POST[$consultor]){
					$list2[]= array('co_usuario' => $value->co_usuario, 'no_usuario' => $value->no_usuario);
				}				
			}
      	}
        return view('Consultor.desem_consultor_rel')->with(compact('consultores','list2'));
    }
}
