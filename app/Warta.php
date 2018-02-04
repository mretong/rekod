<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warta extends Model
{
    protected $table = 'warta';
    protected $primaryKey = 'id';
    protected $fillable = ['kod_blok','fasa','pakej','tarikh_warta','tarikh_luput','jilid_warta','no_warta','rujukan','catatan'];
    public $timestamps = false;
}
