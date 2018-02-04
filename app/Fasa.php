<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fasa extends Model
{
    protected $table = 'fasa';
    protected $primaryKey = 'id';
    protected $fillable = ['kod','nama'];
    public $timestamps = false;
}
