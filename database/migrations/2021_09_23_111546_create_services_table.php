<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->foreignId('vendor_id')->constrained();
            $table->foreignId('category_id')->constrained()->nullable();
            $table->foreignId('subcategory_id')->constrained()->nullable();
            $table->double('price', 15, 2);
            $table->double('discount_price', 15, 2)->default(0.00);
            $table->enum('duration', ['fixed', 'hour', 'day', 'month', 'year'])->default('hour');
            $table->boolean('is_active')->default(true);
            $table->boolean('location')->default(true);
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
        Schema::dropIfExists('services');
    }
}
