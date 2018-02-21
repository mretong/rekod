<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perbicaraan extends Model
{
    protected $table = 'perbicaraan';
    protected $primaryKey = 'id';
    protected $fillable = ['tarikh_1','tarikh_2','tarikh_3','tarikh_4','tarikh_5','id_lot','id_blok','no_pekerja','status','bilangan','pampasan','kos_lain','catatan','jajaran'];
    public $timestamps = false;

    public function lot()
    {
        return $this->belongsTo('App\Lot','id_lot','id');
    }

    public function staff()
    {
        return $this->belongsTo('App\Staff','no_pekerja','id');
    }
}
