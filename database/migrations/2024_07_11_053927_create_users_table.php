<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // auto-increment primary key
            $table->string('username', 255)->unique()->nullable(false);
            $table->string('name', 255)->nullable(false);
            $table->string('email', 255)->unique()->nullable(false);
            $table->string('role_id', 10)->nullable(false); // Konsisten dengan role_id
            $table->string('password', 255)->nullable(false);
            $table->string('armada', 5)->nullable();
            $table->timestamps();

            $table->foreign('role_id')->references('roleid')->on('roles')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
