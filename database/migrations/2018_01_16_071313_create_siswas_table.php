<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('Nis');
              $table->string('Nama');
               $table->string('Tempat_lahir');
                $table->date('Tanggal_lahir');
                 $table->text('Alamat');
                  $table->string('Cita-cita');
                   $table->string('hobi');
                    $table->string('photo');
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
        Schema::dropIfExists('siswas');
    }
}
