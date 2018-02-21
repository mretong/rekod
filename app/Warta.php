<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warta extends Model
{
    protected $table = 'warta';
    protected $primaryKey = 'id';
    protected $fillable = ['id_blok','id_fasa','id_pakej','tarikh_warta','tarikh_luput','jilid_warta','no_warta','rujukan','catatan'];
    public $timestamps = false;

    public function blok()
    {
    	return $this->belongsTo('App\Blok','id_blok','id');
    }
}
