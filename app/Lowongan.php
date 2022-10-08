<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    public $timestamps = false;
    protected $table = 'lowongan';
    protected $fillable = ['nik','judul','foto','keterangan'];
    protected $primaryKey = 'id_lowongan';

    public function alumni() {
        return $this->belongsTo('App\Alumni', 'nik', 'nik');
    }
}
