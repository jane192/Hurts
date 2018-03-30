<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateMusicsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('musics',function(Blueprint $table){
            $table->increments("id");
            $table->string("name");
            $table->string("picture")->nullable();
            $table->string("music")->nullable();
            $table->integer("user_id")->references("id")->on("user")->nullable();
            $table->string("cabinet_id")->nullable();
            $table->string("status")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('musics');
    }

}