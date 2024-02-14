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
        Schema::create('product_wishes', function (Blueprint $table) {
            $table->id();
            //F-key
            $table->string('email',50);
            $table->unsignedBigInteger('product_id');
            //Relation
            $table->foreign('email')->references('email')->on('profiles')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('product_id')->references('id')->on('products')->restrictOnDelete()->cascadeOnUpdate();
            
            $table->timestamp('create_date')->useCurrent();
            $table->timestamp('update_date')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_wishes');
    }
};
