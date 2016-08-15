<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMyDb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent')->default(0);
            $table->string('name');
            $table->string('thumbnail',512);
            $table->text('description');
            $table->string('type')->default('category');
        });

        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent')->default(0);
            $table->string('title');
            $table->string('thumbnail',512);
            $table->text('content');
            $table->text('description');
            $table->text('custom_fields');
            $table->string('type')->default('page');
        });

        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent')->default(0);
            $table->string('title');
            $table->string('thumbnail',512);
            $table->text('content');
            $table->text('description');
            $table->text('custom_fields');
            $table->string('type')->default('post');
        });
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
