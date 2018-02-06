<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mukim extends Model
{
    protected $table = 'mukim';
    protected $primaryKey = 'id';
    protected $fillable = ['nama','no_geran'];
    public $timestamps = false;

    public function blok() {

    	return $this->hasMany('App\Blok', 'id_mukim', 'id');
    }
}
