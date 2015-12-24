<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'kecamatan';
    protected $fillable = ['id', 'nama', 'kabupaten_id'];
    public $timestamps = false;

    public function kabupaten()
    {
    	return $this->hasMany('App\Kabupaten', 'id', 'kabupaten_id');
    }

    public function kelurahan()
    {
    	return $this->belongsTo('App\Kelurahan', 'id', 'kecamatan_id');
    }
}
