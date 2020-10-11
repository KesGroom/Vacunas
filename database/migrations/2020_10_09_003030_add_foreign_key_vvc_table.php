<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyVvcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vvc', function (Blueprint $table) {
            $table->string('id',10)->primary()->unique();
            $table->foreign('id')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('official_id',10);
            $table->foreign('official_id')
                ->references('id')->on('officials')
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
        Schema::table('vvc', function (Blueprint $table) {
            $table->dropForeign('vvc_user_id_foreign');
            $table->dropForeign('vvc_official_id_foreign');
        });
    }
}
