<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mukim extends Model
{
    protected $table = 'mukim';
    protected $primaryKey = 'id';
    protected $fillable = ['id_blok','nama','no_geran'];
    public $timestamps = false;

    public function blok() {

    	return $this->belongsTo('App\Blok', 'id_mukim', 'id');
    }
}
