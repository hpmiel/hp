<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('group_id', false, true);
            $table->string('name');
            $table->string('username', 50)->unique();
            $table->string('email')->unique()->nullable();
            $table->string('password')->nullable();
            $table->string('cellphone', 15)->nullable();
            $table->timestamps();

            $table->foreign('group_id')
                ->on('groups')
                ->references('id')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
