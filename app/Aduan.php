<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aduan extends Model
{
    protected $table = 'aduan';
    protected $primaryKey = 'id';
    protected $fillable = ['no_aduan','tarikh_terima','tarikh_selesai','masa_terima','id_staff','id_lot','id_blok','no_hakmilik','nama_pengadu','no_tel','catatan','maklumbalas','pemaklum','status_aduan'];
    public $timestamps = false;
}
