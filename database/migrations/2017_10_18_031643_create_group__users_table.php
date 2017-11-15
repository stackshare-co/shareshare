<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group__users', function (Blueprint $table) {
            $table->integer('id')->unsigned(); // id_user
            $table->integer('id_group')->unsigned();
            $table->boolean('priority'); // 1 = admin ; 0 = member



            $table->foreign('id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('id_group')
                ->references('id')
                ->on('groups')
                ->onDelete('cascade');

            $table->primary(['id', 'id_group']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group__users');
    }
}
