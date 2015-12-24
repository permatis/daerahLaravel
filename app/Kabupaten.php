<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    protected $table = 'kabupaten';
    protected $fillable = ['id', 'provinsi_id', 'nama'];
    public $timestamps = false;

    public function provinsi()
    {
    	return $this->hasMany('App\Provinsi', 'id', 'provinsi_id');
    }

    public function kecamatan()
    {
    	return $this->belongsTo('App\Kecamatan', 'id', 'kabupaten_id');
    }
}
