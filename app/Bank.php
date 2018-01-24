<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $table = 'bank';
    protected $primaryKey = 'id';
    protected $fillable = ['nama','kod'];
    public $timestamps = false;

    public function pembayaran(){
    	
    	return $this->belongsToMany('App\Bank');
    }
}
