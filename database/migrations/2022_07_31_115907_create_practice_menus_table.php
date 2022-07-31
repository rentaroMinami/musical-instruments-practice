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
        Schema::create('practice_menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('practice_subcategory_id')->constrained('practice_subcategories');
            $table->string('name');
            $table->boolean('is_user_defined')->default(false);
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
        Schema::dropIfExists('practice_menus');
    }
};
