<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('province_id');
            $table->float('gst',8,2);
            $table->float('pst',8,2);
            $table->float('hst',8,2);
            $table->string('country',255);  
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
        Schema::dropIfExists('taxation');
        Schema::dropIfExists('taxations');
    }
}
