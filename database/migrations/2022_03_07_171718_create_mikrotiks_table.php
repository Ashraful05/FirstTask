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
            $table->string('name',64)->nullable();
            $table->string('ip_address',15)->nullable();
            $table->integer('ssh_port')->nullable();
            $table->integer('api_port')->nullable();
            $table->string('user_name')->nullable();
            $table->string('password')->nullable();
            $table->bigInteger('router_type_id')->unsigned()->index()->nullable();
            $table->foreign('router_type_id')->references('id')->on('router_types');
            $table->bigInteger('activation_status_id')->unsigned()->index()->nullable();
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
