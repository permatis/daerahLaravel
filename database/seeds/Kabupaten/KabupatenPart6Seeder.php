<?php

use App\Kabupaten;
use Illuminate\Database\Seeder;

class KabupatenPart6Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = '[{"id":"9171","provinsi_id":"91","nama":"KOTA JAYAPURA"},{"id":"9201","provinsi_id":"92","nama":"KAB. SORONG"},{"id":"9202","provinsi_id":"92","nama":"KAB. MANOKWARI"},{"id":"9203","provinsi_id":"92","nama":"KAB. FAK FAK"},{"id":"9204","provinsi_id":"92","nama":"KAB. SORONG SELATAN"},{"id":"9205","provinsi_id":"92","nama":"KAB. RAJA AMPAT"},{"id":"9206","provinsi_id":"92","nama":"KAB. TELUK BINTUNI"},{"id":"9207","provinsi_id":"92","nama":"KAB. TELUK WONDAMA"},{"id":"9208","provinsi_id":"92","nama":"KAB. KAIMANA"},{"id":"9209","provinsi_id":"92","nama":"KAB. TAMBRAUW"},{"id":"9210","provinsi_id":"92","nama":"KAB. MAYBRAT"},{"id":"9211","provinsi_id":"92","nama":"KAB. MANOKWARI SELATAN"},{"id":"9212","provinsi_id":"92","nama":"KAB. PEGUNUNGAN ARFAK"},{"id":"9271","provinsi_id":"92","nama":"KOTA SORONG"}]';

		foreach(json_decode($array) as $val) { Kabupaten::create( (array) $val ); }		
    }
}