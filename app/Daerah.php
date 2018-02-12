<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daerah extends Model
{
    protected $table = 'daerah';
    protected $primaryKey = 'id';
    protected $fillable = ['nama','kod','id_negeri'];
    public $timestamps = false;

    public function negeri()
    {
    	return $this->belongsTo('App\Negeri','id_negeri','id');
    }
}
