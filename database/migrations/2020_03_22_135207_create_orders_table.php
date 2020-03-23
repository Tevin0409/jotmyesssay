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
            $table->bigIncrements('id');
            $table->string('academic_level');
            $table->string('paper_type');
            $table->string('no_of_slides');
            $table->string('subject_area');
            $table->text('topic');
            $table->text('No_of_pages');
            $table->text('spacing');
            $table->text('currency');
            $table->text('deadline');
            $table->text('category');
            $table->text('amount')->nullable();
            $table->text('instructions');
            $table->text('payment_status')->nullable();
            $table->text('writters_id')->nullable();
            $table->text('vip_support')->nullable();
            $table->string('file')->nullable();
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
