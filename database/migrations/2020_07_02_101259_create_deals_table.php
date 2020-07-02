<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {
            
           
            $table->id();
            $table->string('name');
            $table->string('type')->nullable();
            $table->integer('summ')->nullable();
            $table->date('time_start')->default(Carbon\Carbon::now());
            $table->date('time_end')->nullable();
            $table->string('status')->nullable();
            $table->string('client_id')->nullable();
            $table->boolean('favorite')->default(false);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deals');
    }
}
