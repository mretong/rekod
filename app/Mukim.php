<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mukim extends Model
{
    protected $table = 'mukim';
    protected $primaryKey = 'id';
    protected $fillable = ['id_blok','id_mukim','nama','no_geran'];
    public $timestamp = false;
}
