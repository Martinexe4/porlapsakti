<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('provinsis', function (Blueprint $table) {
<<<<<<< HEAD
            $table->id(); 
            $table->string('kode_prov', 10)->unique();
=======
            $table->string('id', 10);
            $table->string('kode_prov', 10)->primary();
>>>>>>> origin/master
            $table->string('nama_provinsi');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('provinsis');
    }
};
