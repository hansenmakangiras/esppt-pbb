<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjekPajakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objek_pajak', function (Blueprint $table) {
            $table->id();
            $table->string('nop_pbb',15);
            $table->string('nik',15);
            $table->string('tahun_sppt',4);
            $table->string('jenis_pengunduh',50);
            $table->integer('domisili');
            $table->integer('hubungan');
            $table->string('no_hp',13);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objek_pajak');
    }
}
