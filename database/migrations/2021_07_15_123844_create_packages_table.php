<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('package_name', 100);
            $table->string('city', 50);
            $table->string('country', 50);    
            $table->string('type', 50);
            $table->string('structure_name', 100);
            $table->string('structure_type', 100);
            $table->float('rating', 2, 1);
            $table->float('price_night_person', 7, 2);
            $table->date('departure');
            $table->date('return');
            $table->boolean('free_cancellation')->default(1);
            $table->mediumText('description')->nullable();
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
        Schema::dropIfExists('packages');
    }
}
