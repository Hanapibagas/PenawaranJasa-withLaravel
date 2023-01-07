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
            $table->foreignId('buyer_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('freelance_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('services_id')->constrained('services')->onDelete('cascade')->onUpdate('cascade');
            $table->longText('file');
            $table->longText('note');
            $table->date('expires');
            $table->foreignId('order_statuses');
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
