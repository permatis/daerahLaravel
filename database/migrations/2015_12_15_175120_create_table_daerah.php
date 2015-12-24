<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDaerah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provinsi', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
        });

        Schema::create('kabupaten', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('provinsi_id')->unsigned();
            $table->string('nama');

            $table->foreign('provinsi_id')->references('id')->on('provinsi')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('kecamatan', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('kabupaten_id')->unsigned();
            $table->string('nama');

            $table->foreign('kabupaten_id')->references('id')->on('kabupaten')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('kelurahan', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('kecamatan_id')->unsigned();
            $table->string('nama');

            $table->foreign('kecamatan_id')->references('id')->on('kecamatan')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('provinsi');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('kabupaten');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('kecamatan');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('kelurahan');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
