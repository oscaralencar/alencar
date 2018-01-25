<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('url_web')->nullable();
            $table->string('url_android')->nullable();
            $table->string('url_ios')->nullable();
            $table->string('technology')->nullable();
            $table->integer('client_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('type_id')->references('id')->on('types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('projects');
    }
}
