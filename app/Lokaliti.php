<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lokaliti extends Model
{
    protected $table = 'lokaliti';
    protected $primaryKey = 'id';
    protected $fillable = ['nama','kod'];
    public $timestamps = false;

    public function blok()
    {
    	return $this->belongToMany('App\Blok');
    }
}
