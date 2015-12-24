<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $table = 'provinsi';
    protected $fillable = ['id', 'nama'];
    public $timestamps = false;

    public function kabupaten()
    {
    	return $this->belongsTo('App\Kabupaten', 'id', 'provinsi_id');
    }
}
