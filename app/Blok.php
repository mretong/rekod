<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blok extends Model
{
    protected $table = 'blok';
    protected $primaryKey = 'id';
    protected $fillable = ['nama','id_lokaliti','jum_lot_total','anggaran_kos','status_batal','id_fasa','rujukan_jkptg','rujukan_jps'];
    public $timestamps = false;

    public function pembayaran()
    {
    	return $this->belongsTo('App\Pembayaran');
    }

    public function lokaliti()
    {
    	return $this->belongsToMany('App\Lokaliti','blok_lokaliti','blok_id','lokaliti_id');
    }
}
