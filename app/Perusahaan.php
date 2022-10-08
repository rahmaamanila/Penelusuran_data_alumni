<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    public $timestamps = false;
    protected $table = 'perusahaan';
    protected $fillable = ['nm_perusahaan'];

    public function alumni(){
    	return $this->hasMany('App\Alumni', 'nik');
    }
}
