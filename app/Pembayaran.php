<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'id';
    protected $fillable = ['id_pemilik','id_bank','id_perbicaraan','no_akaun','kaedah_bayaran','no_baucer','tarikh_baucer','no_cek','tarikh_cek','rujukan','catatan','id_status','rujukan_denda','tarikh_denda','attachment'];
    public $timestamps = false;

    public function bank()
    {
    	return $this->belongTo('App\Bank','id_bank','id');
    }

    public function status()
    {
    	return $this->belongsTo('App\StatusPembayaran','id_status','id');
    }

    public function pemilik()
    {
    	return $this->belongsTo('App\Pemilik','id_pemilik','id');
    }

    public function perbicaraan()
    {
    	return $this->belongsTo('App\Perbicaraan','id_perbicaraan','id');
    }
}
