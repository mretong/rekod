<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusBlok extends Model
{
    protected $table = 'status_blok';
    protected $primaryKey = 'id';
    protected $fillable = ['nama','kod'];

    public $timestamps = false;
}
