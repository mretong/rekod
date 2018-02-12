<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BorangK extends Model
{
    protected $table = 'borang_k';
    protected $primaryKey = 'id';
    protected $fillable = ['id_blok','id_lot','tarikh_k','rujukan_k','rujukan_fail','attachment'];

    public $timestamps = false;
}
