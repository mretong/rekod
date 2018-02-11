<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemilik extends Model
{
    protected $table = 'pemilik';
    protected $primaryKey = 'id';
    protected $fillable = ['id_lot','nama','no_kp','kategori_pampasan'];
    public $timestamps = false;
}
