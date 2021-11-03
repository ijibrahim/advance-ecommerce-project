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
            $table->unsignedbigInteger('user_id');
            $table->unsignedbigInteger('division_id');
            $table->unsignedbigInteger('district_id');
            $table->unsignedbigInteger('state_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->integer('post_code')->nullable();
            $table->text('notes')->nullable();
            $table->string('payment_type');
            $table->string('payment_method')->nullable();
            $table->string('transection_id');
            $table->string('currency');
            $table->float('amount',8,2); 
            $table->string('order_number'); 
            $table->string('invoice_no'); 
            $table->string('order_date'); 
            $table->string('order_month'); 
            $table->string('order_year'); 
            $table->string('confirmed_date')->nullable(); 
            $table->string('processing_date')->nullable(); 
            $table->string('packed_date')->nullable(); 
            $table->string('shipped_date')->nullable(); 
            $table->string('delivered_date')->nullable(); 
            $table->string('cancel_date')->nullable(); 
            $table->string('return_date')->nullable(); 
            $table->string('return_reason')->nullable(); 
            $table->string('status')->default(1); 
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
