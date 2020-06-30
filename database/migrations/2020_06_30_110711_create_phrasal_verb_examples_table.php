<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreatePhrasalVerbExamplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phrasal_verb_examples', function (Blueprint $table) {
            $table->bigInteger("phrasal_verb_id")->unsigned();
            $table->string("form", 75);
            $table->string("translate", 100);
            $table->text("example");
            $table->text("example_translate");
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp("updated_at")->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

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
        Schema::dropIfExists('phrasal_verb_examples');
    }
}
