<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug')->default('');;
            $table->text('description');
            $table->text('content');
            $table->integer('category_id')->unsigned();
          
           
            $table->integer('views')->unsigned()->default(0);
            $table->string('thumbnail')->nullable();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories');
          
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
