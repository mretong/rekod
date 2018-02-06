<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LotPemilik extends Model
{
    protected $table = 'lot_pemilik';
    protected $primary_key = 'id';
    protected $fillable = ['id_lot','id_pemilik','no_hakmilik','status_hakmilik','pecahan_bahagian','nilai_tanah','luas_pengambilan'];
    public $timestamps = false;
}
