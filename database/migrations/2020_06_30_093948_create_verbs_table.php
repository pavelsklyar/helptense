<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateVerbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verbs', function (Blueprint $table) {
            $table->id();
            $table->string("first_form", 45)->unique();
            $table->string("second_form", 45)->unique();
            $table->string("third_form", 45)->unique();
            $table->string("translate", 45);
            $table->string("transcription", 45)->nullable();

            $table->text("first_form_example_single")->nullable();
            $table->text("first_form_example_multiple")->nullable();
            $table->text("first_form_example_negative")->nullable();

            $table->text("second_form-example_single")->nullable();
            $table->text("second_form-example_multiple")->nullable();
            $table->text("second_form-example_negative")->nullable();

            $table->text("third_form_example_single")->nullable();
            $table->text("third_form_example_multiple")->nullable();
            $table->text("third_form_example_negative")->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp("updated_at")->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('verbs');
    }
}
