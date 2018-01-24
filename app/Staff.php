<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'model';
    protected $primaryKey = 'id';
    protected $fillable = ['no_pekerja','nama'];
    public $timestamp = false;
}
