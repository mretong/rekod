<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemilik extends Model
{
    protected $table = 'pemilik';
    protected $primaryKey = 'id';
    protected $fillable = ['id_lot','id_pembayaran','nama','no_kp','kategori_pampasan','id_pembayaran'];
    public $timestamps = false;
}
