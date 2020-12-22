<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('slug', 255);
            $table->tinyInteger('is_available')->default('1');            
            $table->string('dimensions',45);
            $table->float('weight', 8, 2);
            $table->enum('operatingSystem', ['iOS', 'Android','other']);
            $table->string('displaysize',255);
            $table->integer('camera');
            $table->mediumText('shortdescription');
            $table->longText('longdescription');
            $table->string('pixel',255);
            $table->float('unitprice',8,2);
            $table->string('memory',45);           
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
        Schema::dropIfExists('products');
    }
}
