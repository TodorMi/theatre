<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('theatres', function (Blueprint $table) {
            $table->integer('ticket_id')->unsigned()->nullable()->default(NULL);
            Schema::disableForeignKeyConstraints();
            $table->foreign('ticket_id')->references('id')->on('tickets')->onDelete('cascade');;
            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('theatres', function (Blueprint $table) {
            $table->dropForeign('theatres_ticket_id_foreign');
            $table->dropColumn('ticket_id');
        });
    }
}
