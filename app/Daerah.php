<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daerah extends Model
{
    protected $table = 'daerah';
    protected $primaryKey = 'id';
    protected $fillable = ['nama','kod'];
    public $timestamps = false;
}
