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
            $table->bigIncrements('id');
            $table->string('judul');
            $table->integer('category_id');
            $table->text('content');
            $table->string('gambar');
            $table->integer('users_id');
            $table->string('slug');     
            $table->string('gambar_2');     
            $table->string('link_url');     
            $table->string('link_url_2');     
            $table->string('meta_description');     
            $table->string('meta_keyword');     
            $table->softDeletes();
            $table->timestamps();
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
