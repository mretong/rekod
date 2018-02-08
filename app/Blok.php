<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blok extends Model
{
    protected $table = 'blok';
    protected $primaryKey = 'id';
    protected $fillable = ['nama','jum_lot_total','anggaran_kos','status_batal','id_fasa','rujukan_jkptg','rujukan_jps','jajaran'];
    public $timestamps = false;

    public function pembayaran()
    {
    	return $this->belongsTo('App\Pembayaran');
    }

    public function mukim()
    {
    	return $this->belongsTo('App\Mukim','id_mukim','id');
    }

    public function lokaliti()
    {
    	return $this->belongsToMany('App\Lokaliti','blok_lokaliti','blok_id','lokaliti_id');
    }
}
