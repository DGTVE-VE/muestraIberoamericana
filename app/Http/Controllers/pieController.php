<?php

namespace App\Http\Controllers;
use DB;
use File;
use Mail;
use App\User;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use Illuminate\Http\Request;

class pieController extends Controller {

	/*public function __construct()
	{
		  $this->middleware('auth');
	}*/

	public function guardaContacto(){

		$guardaDatos = DB::table('muestra_contacto')->insert(['nombre_contacto'=>$_POST['nombre_contacto'],
						'correo'=>$_POST['correo'],'asunto'=>$_POST['asunto'],'mensaje'=>$_POST['mensaje']]);
		
		/*$guardaDatos = "1";*/

		/*$datosContacto = [$_POST['nombre_contacto'],$_POST['correo'],$_POST['asunto']];
		$correo = 'mitec@televisioneducativa.gob.mx';
		$hash = md5(date('Y/m/d H:i:s'));
		Mail::send('viewMuestra.mailActivacion', ['correo' => $correo, 'hash' => $hash, 'datosContacto' => $datosContacto], function ($m) use ($correo) {
            $m->from('mitec@televisioneducativa.gob.mx', 'Muestra Iberoamericana');
            $m->to($correo)->subject('Comentarios Recibidos');
        });*/
		return view('viewMuestra.contacto')->with('guardaDatos',$guardaDatos);
	}
}
