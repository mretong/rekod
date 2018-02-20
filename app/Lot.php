<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    protected $table = 'lot';
    protected $primaryKey = 'id';
    protected $fillable = ['no_lot','no_hakmilik','id_mukim','id_blok','id_pakej','status_tanah'];
    
    public $timestamps = false;

    public function perbicaraan()
    {
    	return $this->belongTo('App\Perbicaraan');
    }

    public function pemilik()
    {
    	return $this->belongsToMany('App\Pemilik','lot_pemilik','id_lot','id_pemilik');
    }
}
