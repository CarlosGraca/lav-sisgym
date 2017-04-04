<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenantMenu extends Model
{
    protected $table = 'tenant_menu';

    protected $fillable = array('menu_id', 'tenant_id');

    public function menu(){
    	return $this->belongsTo('App\Models\Menu','menu_id','id');
    }
}
