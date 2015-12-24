<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    protected $table = 'kelurahan';
    protected $fillable = ['id', 'nama', 'kecamatan_id'];
    public $timestamps = false;

    public function kecamatan()
    {
    	return $this->hasMany('App\Kecamatan', 'id', 'kecamatan_id');
    }
}
