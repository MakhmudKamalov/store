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
    Schema::create('naushniks', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('for');
      $table->integer('quantity');
      $table->integer('price');
      $table->integer('total');
      $table->string('type');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('naushniks');
  }
};
