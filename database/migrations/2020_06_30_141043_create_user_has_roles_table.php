<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserHasRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_has_roles', function (Blueprint $table) {
            $table->bigInteger("user_id")->unsigned();
            $table->bigInteger("role_id")->unsigned();

            $table->foreign("user_id")->references("id")->on("users");
            $table->foreign("role_id")->references("id")->on("roles");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_has_roles');
    }
}
