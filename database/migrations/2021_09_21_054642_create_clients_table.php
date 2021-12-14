<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->uuid('id')->primary();           
            $table->string('name', 50);
            $table->string('email', 50);
            $table->uuid('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->uuid('country_id');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->uuid('city_id');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->uuid('phone_code_id');
            $table->foreign('phone_code_id')->references('id')->on('phone_codes');
            $table->biginteger('phone_no');
            $table->longText('address');
            $table->longText('about_us')->nullable();
            $table->string('logo', 30);
            $table->integer('is_premium')->default(0);
            $table->uuid('added_by');
            $table->foreign('added_by')->references('id')->on('users');
            $table->uuid('update_by')->nullable();
            $table->foreign('update_by')->references('id')->on('users');
            $table->softDeletes();
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
        Schema::dropIfExists('clients');
    }
}
