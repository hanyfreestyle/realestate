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
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->json('links')->nullable();

            $table->integer('location_id')->nullable();
            $table->integer('location_count')->default(0);

            $table->integer('compound_id')->nullable();
            $table->integer('compound_count')->default(0);


            $table->json('property_type')->nullable();
            $table->integer('property_count')->default(0);




            $table->json('slug')->nullable();
            $table->text('hash')->nullable();
            $table->text('hash_new')->nullable();
            $table->integer('hash_check')->nullable();
            $table->integer('is_active')->default(1);
            $table->integer('is_count')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
