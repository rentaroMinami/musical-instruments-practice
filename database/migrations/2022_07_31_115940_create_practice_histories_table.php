<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practice_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('instrument_id')->constrained('instruments');
            $table->foreignId('practice_menu_id')->constrained('practice_menus');
            $table->integer('practice_seconds');
            $table->text('memo');
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
        Schema::dropIfExists('practice_histories');
    }
};
