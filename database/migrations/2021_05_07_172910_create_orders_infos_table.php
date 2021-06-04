<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_infos', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('payment_status');
            $table->string('transaction_id');
            $table->string('currency');
            $table->float('order_total', 10, 2);
            $table->text('order_date');
            $table->string('payment_type');

            $table->unsignedBigInteger('customer_id');

            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('CASCADE');
            $table->unsignedBigInteger('shipping_id');
            $table->foreign('shipping_id')->references('id')->on('shippings')->onDelete('CASCADE');



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
        Schema::dropIfExists('order_infos');
    }
}
