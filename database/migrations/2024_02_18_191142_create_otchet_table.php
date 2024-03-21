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
    Schema::create('otchet', function (Blueprint $table) {
      $table->id();
      $table->string('worker_name');
      $table->string('name');
      $table->string('type');
      $table->string('for');
      $table->string('count');
      $table->string('pul');
      $table->string('tolem');
      $table->string('comment')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('otchet');
  }
};
