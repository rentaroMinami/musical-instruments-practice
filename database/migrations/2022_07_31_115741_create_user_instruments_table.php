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
        Schema::create('user_instruments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('user_setting_id')->constrained('user_settings');
            $table->foreignId('instrument_id')->constrained('instruments');
            $table->boolean('is_main')->default(true);
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
        Schema::dropIfExists('user_instruments');
    }
};
