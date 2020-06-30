<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavouriteVerbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favourite_verbs', function (Blueprint $table) {
            $table->bigInteger("user_id")->unsigned();
            $table->bigInteger("verb_id")->unsigned();

            $table->foreign("user_id")->references("id")->on("users");
            $table->foreign("verb_id")->references("id")->on("verbs");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favourite_verbs');
    }
}
