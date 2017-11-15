<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desas', function (Blueprint $table) {
            $table->increments('kd_desa');
            $table->integer('kd_kecamatan')->unsigned();
            $table->string('nama_desa');
            $table->double('luas_desa');
            $table->integer('jumlah_laki_laki')->unsigned();
            $table->integer('jumlah_wanita')->unsigned();
            $table->integer('jumlah_kk')->unsigned();
            $table->mediumtext('polygon');
            $table->foreign('kd_kecamatan')->references('kd_kecamatan')->on('kecamatans')->onDelete('CASCADE');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('desas');
    }
}