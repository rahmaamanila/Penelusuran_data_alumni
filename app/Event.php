<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $timestamps = false;
    protected $table = 'event';
    protected $fillable = ['nik','nm_event','awal_event', 'selesai_event', 'keterangan','foto'];
    protected $primaryKey = 'id_event';

    public function alumni() {
        return $this->belongsTo('App\Alumni', 'nik', 'nik');
    }
}
