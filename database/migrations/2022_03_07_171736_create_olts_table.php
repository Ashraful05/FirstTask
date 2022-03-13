<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('olts', function (Blueprint $table) {
            $table->id();
            $table->string('name',64);
            $table->string('ip_address',64);
            $table->string('model',128);
            $table->string('username',64);
            $table->string('password',64);
            $table->integer('port');
            $table->bigInteger('olt_type_id')->unsigned()->index();
            $table->foreign('olt_type_id')->references('id')->on('olt_types');
            $table->bigInteger('vendor_id')->unsigned()->index();
            $table->foreign('vendor_id')->references('id')->on('vendors');
            $table->bigInteger('activation_status_id')->unsigned()->index();
            $table->foreign('activation_status_id')->references('id')->on('activation_statuses');
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
        Schema::dropIfExists('olts');
    }
};
