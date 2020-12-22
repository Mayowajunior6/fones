<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('orderNumber',45);
            $table->foreignId('user_id');
            $table->string('status',45);
            $table->dateTime('order_date',0);
            $table->foreignId('offer_id');
            $table->foreignId('province_id');
            $table->string('email',255);
            $table->float('totalGST',8,2);
            $table->float('totalPST',8,2);
            $table->float('totalHST',8,2);
            $table->float('totaltax',8,2);
            $table->float('totalAmount',8,2);
            $table->longText('billing_address');
            $table->longText('shipping_address');
            $table->integer('pointsApplied');            
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
        Schema::dropIfExists('orders');
    }
}
