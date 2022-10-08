<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    public $timestamps = false;
    protected $table = 'jabatan';
    protected $fillable = ['nm_jabatan'];

    public function alumni(){
    	return $this->hasMany('App\Alumni', 'nik');
    }
}
