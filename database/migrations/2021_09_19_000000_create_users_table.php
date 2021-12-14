<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('added_by')->nullable();
            $table->uuid('updated_by')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->uuid('country_id')->nullable();
            $table->uuid('city_id')->nullable();
            $table->uuid('gender_id')->nullable();
            $table->uuid('role_id');            
            $table->enum('user_type', ['Admin', 'Candidate','Recruiter']);
            $table->string('device_token')->nullable();
            $table->integer('status')->default(1);
            $table->integer('is_verified')->default(1);
            $table->string('password');
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('gender_id')->references('id')->on('genders');
            $table->foreign('role_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
