<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blok extends Model
{
    protected $table = 'blok';
    protected $primaryKey = 'id';
    protected $fillable = ['nama','id_lokaliti','jum_lot_total','anggaran_kos','id_fasa'];
    public $timestamps = false;

    public function pembayaran()
    {
    	return $this->belongsTo('App\Pembayaran');
    }

    public function lokaliti()
    {
    	return $this->belongsTo('App\Lokaliti','id_lokaliti','id');
    }
    
    public function fasa(){
        return $this->belongsTo('App\Fasa','id_fasa','id');
    }
}
