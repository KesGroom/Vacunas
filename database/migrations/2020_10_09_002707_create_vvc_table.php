<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVvcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vvc', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('scanned_image');
            $table->string('no_civil_registry');
            $table->enum('gender',['Masculino', 'Femenino']);
            $table->string('weight',10);
            $table->string('name_responsible',80);
            $table->string('address_responsible',80);
            $table->string('city_responsible',50);
            $table->string('institution_name',80);
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
        Schema::dropIfExists('vvc');
    }
}
