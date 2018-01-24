<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blok extends Model
{
    protected $table = 'blok';
    protected $primaryKey = 'id';
    protected $fillable = ['id_blok','id_mukim','id_lokaliti','jum_lot_total','anggaran_kos','status_batal','fasa_pengambilan'];
    public $timestamp = false;

    public function pembayaran()
    {
    	return $this->belongTo('App\Pembayaran');
    }
}
