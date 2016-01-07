<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clsRecuerdo extends Model
{
	protected $fillable = ['contenido','titulo'];
	/*public $datos = "hola mundo";
	public function  metodo(){
		return $this->fillable;
	}*/
}
