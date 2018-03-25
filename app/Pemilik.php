<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemilik extends Model
{
    protected $table = 'pemilik';
    protected $primaryKey = 'id';
    protected $fillable = ['id_blok','id_lot','nama','no_kp','kategori_pampasan'];
    public $timestamps = false;

    public function lot()
    {
    	return $this->belongsTo('App\Lot','id_lot','id');
    }

    public function blok()
    {
    	return $this->belongsTo('App\Blok','id_blok','id');
    }
}
