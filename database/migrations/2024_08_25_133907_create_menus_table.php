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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id')->default(0);
            $table->string('title');
            $table->string('url')->nullable();
            $table->string('routeName')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('position')->default(0);
            $table->string('icon')->nullable();
            $table->timestamps();
            $table->softDeletes();
    
       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
