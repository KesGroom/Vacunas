<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('id', 10)->unique()->primary()->comment('Llave primaría designada al NIP de cada usuario');
            $table->string('name', 50);
            $table->string('lastname', 50);          
            $table->date('date_of_birth');
            $table->enum('document_type', ['RC', 'TI', 'CC']);
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
        Schema::dropIfExists('users');
    }
}
