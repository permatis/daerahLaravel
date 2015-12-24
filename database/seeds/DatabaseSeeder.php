<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Model::unguard();
        
        // DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        // \App\Provinsi::truncate();
        // DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        // DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        // \App\Kabupaten::truncate();
        // DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        // DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        // \App\Kecamatan::truncate();
        // DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \App\Kelurahan::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');


        $this->call(ProvinsiPart1Seeder::class);
        $classes = require base_path().'/vendor/composer/autoload_classmap.php';
        foreach ($classes as $class) {
            //if(strpos($class, 'Seeder') !== false && strpos($class, 'Kelurahan') == true)
            if (strpos($class, 'Seeder') !== false && strpos($class, 'DatabaseSeeder') != true && strpos($class, 'ProvinsiPart1Seeder') != true)
            {
                $seederClass = substr(last(explode('/', $class)), 0, -4);
                //var_dump($seederClass);
                $this->call($seederClass);
            }
        }
        //Model::reguard();
    }
}
