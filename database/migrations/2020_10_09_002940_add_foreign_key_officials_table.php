<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyOfficialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('officials', function (Blueprint $table) {
            $table->string('id',10)->primary();
            $table->foreign('id')
                ->references('NIP')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('eps_id')->unsigned();
            $table->foreign('eps_id')
                ->references('id')->on('eps')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('officials', function (Blueprint $table) {
            $table->dropForeign('officials_id_foreign');
        });
    }
}
