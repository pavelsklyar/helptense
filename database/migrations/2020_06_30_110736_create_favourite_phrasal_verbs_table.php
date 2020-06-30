<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavouritePhrasalVerbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favourite_phrasal_verbs', function (Blueprint $table) {
            $table->bigInteger("user_id")->unsigned();
            $table->bigInteger("phrasal_verb_id")->unsigned();

            $table->foreign("user_id")->references("id")->on("users");
            $table->foreign("phrasal_verb_id")->references("id")->on("phrasal_verbs");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favourite_phrasal_verbs');
    }
}
