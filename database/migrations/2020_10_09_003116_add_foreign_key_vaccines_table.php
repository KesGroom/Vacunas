<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyVaccinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vaccines', function (Blueprint $table) {
            $table->integer('official_id')->unsigned();
            $table->foreign('official_id')
                ->references('id')->on('officials')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('vvc_id')->unsigned();
            $table->foreign('vvc_id')
                ->references('id')->on('vvc')
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
        Schema::table('vaccines', function (Blueprint $table) {
            $table->dropForeign('vaccines_official_id_foreign');
            $table->dropForeign('vaccines_vvc_id_foreign');
        });
    }
}
