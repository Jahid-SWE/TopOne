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
            $table->integer('customer_id');
            $table->integer('shipping_id');
            $table->float('order_total', 10, 2);
            $table->text('order_date');
            $table->string('payment_type')->nullable();
            $table->string('order_status')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('currency')->nullable();

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