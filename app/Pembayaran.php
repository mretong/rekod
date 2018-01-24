<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'id';
    protected $fillable = ['id_bank','id_perbicaraan','no_akaun','kaedah_bayaran','no_baucer','attachment','tarikh_baucer','no_cek','tarikh_cek','rujukan','catatan','status'];
    public $timestamp = false;

    public function bank()
    {
    	return $this->belongTo('App\Bank');
    }
}
