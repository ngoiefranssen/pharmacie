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
        Schema::create('medications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pharmacist_id')->constrained()->onDelete('CASCADE');
            $table->foreignId('category_id')->constrained()->onDelete('CASCADE');
            $table->foreignId('invoice_id')->constrained()->onDelete('CASCADE');
            $table->string('name_medication');
            $table->date('manufacturing_date');
            $table->date('Expiry_date');
            $table->string('description_medication');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medications');
    }
};
