<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perbicaraan extends Model
{
    protected $table = 'perbicaraan';
    protected $primaryKey = 'id';
    protected $fillable = ['tarikh_1','tarikh_2','tarikh_3','tarikh_4','tarikh_5','id_lot','nama_pentadbir','status','bilangan','pampasan','kos_lain','catatan','jajaran'];
    public $timestamps = false;

    public function warta()
    {
    	return $this->belongsTo('App\Perbicaraan');
    }

    public function lot()
    {
    	return $this->belongsTo('App\Lot');
    }
}
