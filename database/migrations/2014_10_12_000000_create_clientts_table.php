<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienttsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('password_resets')) {
            Schema::create('clientt', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('apaterno');
                $table->string('amaterno');
                $table->string('telefono');

                $table->string('email')->unique();
                $table->string('password');
                //$table->integer('celular')->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->rememberToken();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientt');
    }
}
