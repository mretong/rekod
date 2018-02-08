<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusTanah extends Model
{
    protected $table = 'status_tanah';
    protected $primaryKey = 'id';
    protected $fillable = ['nama','kod'];

    public $timestamps = false;
}
