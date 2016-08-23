<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->timestamp('updated_at');
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->timestamp('updated_at');
        });
        Schema::table('pages', function (Blueprint $table) {
            $table->timestamp('updated_at');
        });
        Schema::table('relations', function (Blueprint $table) {
            $table->timestamp('updated_at');
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
