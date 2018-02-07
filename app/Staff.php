<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';
    protected $primaryKey = 'id';
    protected $fillable = ['no_pekerja','nama'];
    public $timestamps = false;

    public function bicara()
    {
    	return $this->hasMany('App\Perbicaraan');
    }
}
