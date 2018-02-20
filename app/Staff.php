<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';
    protected $primaryKey = 'id';
    protected $fillable = ['no_pekerja','nama','id_ptj'];
    public $timestamps = false;

    public function perbicaraan()
    {
    	return $this->belongsTo('App\Perbicaraan');
    }
}
