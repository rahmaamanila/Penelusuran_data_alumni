<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Alumni extends Authenticatable
{
    use Notifiable;

    protected $table = 'alumni';
    protected $primaryKey = 'nik';
    protected $fillable = [
        'nik','id_perusahaan', 'id_jabatan', 'nama', 'tmpt_lahir', 'tgl_lahir', 'jenkel', 'agama', 'no_telp', 'alamat', 'thn_lulus', 'angkatan', 'email', 'password', 'status', 'tgl_masuk', 'role', 'id_user'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    // public $timestamps = false;
    // protected $table = 'alumni';
    // protected $fillable = ['nik','id_perusahaan', 'id_jabatan', 'nama', 'tmpt_lahir', 'tgl_lahir', 'jenkel', 'agama', 'no_telp', 'alamat', 'thn_lulus', 'email', 'password', 'status', 'tgl_masuk', 'role'];
    // protected $primaryKey = 'nik';

    public function jabatan() {
        return $this->belongsTo('App\Jabatan', 'id_jabatan', 'id_jabatan');
    }

    public function perusahaan() {
        return $this->belongsTo('App\Perusahaan', 'id_perusahaan', 'id_perusahaan');
    }

    public function event() {
        return $this->hasMany('App\Event', 'id_event');
    }

    public function lowongan() {
        return $this->hasMany('App\Lowongan', 'id_lowongan');
    }
}
