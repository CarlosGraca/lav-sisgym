<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dominio extends Model
{
    protected $table = 'dominios';
	public $timestamps = false;

	//use SoftDeletes;

	protected $fillable = array('dominio', 'codigo', 'significado','tenant_id');


	 public function membros(){
     	return $this->hasMany('App\Models\Membro');
     }
}
