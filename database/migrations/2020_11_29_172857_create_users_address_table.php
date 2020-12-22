<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('address1',255);
            $table->string('address2',255);
            $table->string('postal',10);
            $table->string('city',45);
            $table->integer('province_id');
            $table->string('country',255);
            $table->tinyInteger('shippingAddress');
            $table->tinyInteger('billingAddress');
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
        Schema::dropIfExists('users_addresses');
        Schema::dropIfExists('user_addresses');
    }
}
