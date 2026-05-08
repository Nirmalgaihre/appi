<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('staff', function (Blueprint $table) {
        $table->id();
        $table->string('staff_name');
        $table->string('staff_category'); // Plain string instead of a foreign key
        $table->string('staff_phone')->nullable();
        $table->string('staff_email')->nullable();
        $table->string('staff_img')->nullable();
        $table->integer('position')->default(0); // Essential for reordering
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
