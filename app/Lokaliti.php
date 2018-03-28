<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lokaliti extends Model
{
    protected $table = 'lokaliti';
    protected $primaryKey = 'id';
    protected $fillable = ['id_wilayah','nama','kod'];
    public $timestamps = false;

    public function blok()
    {
    	return $this->belongToMany('App\Blok','blok_lokaliti','id_blok','id_lokaliti');
    }

    public function wilayah(){
    	return $this->belongsTo('App\Wilayah','id_wilayah','id');
    }
}
