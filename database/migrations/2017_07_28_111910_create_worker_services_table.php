<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkerServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worker_services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('worker_id')->unsigned()->default(1);
            $table->foreign('worker_id')->references('id')->on('workers');
            $table->integer('service_id')->unsigned()->default(1);
            $table->foreign('service_id')->references('id')->on('services');
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
        Schema::dropIfExists('worker_services');
    }
}
