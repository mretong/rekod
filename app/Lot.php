<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    protected $table = 'lot';
    protected $primaryKey = 'id';
    protected $fillable = ['nama','pakej','status_tanah'];
    public $timestamp = false;

    public function perbicaraan()
    {
    	return $this->belongTo('App\Perbicaraan');
    }
}
