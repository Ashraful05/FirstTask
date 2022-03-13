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
        Schema::create('mikrotiks', function (Blueprint $table) {
            $table->id();
            $table->string('name',64);
            $table->string('ip_address',15);
            $table->integer('ssh_port');
            $table->integer('api_port');
            $table->string('user_name');
            $table->string('password');
            $table->bigInteger('router_type_id')->unsigned()->index();
            $table->foreign('router_type_id')->references('id')->on('router_types');
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
        Schema::dropIfExists('mikrotiks');
    }
};
