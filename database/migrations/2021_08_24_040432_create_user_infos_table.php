<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('nop_pbb',30)->default(null);
            $table->string('nik',30)->unique()->default(null);
            $table->string('tahun_sppt',4)->nullable();
            $table->string('no_telepon',15)->nullable();
            $table->integer('status_hubungan');
            $table->integer('domisili');
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
        Schema::dropIfExists('user_infos');
    }
}
