<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('added_by');
            $table->foreign('added_by')->references('id')->on('users');
            $table->uuid('update_by')->nullable();
            $table->foreign('update_by')->references('id')->on('users');
            $table->uuid('offered_by');
            $table->foreign('offered_by')->references('id')->on('clients');
            $table->integer('offered_by_visibility')->default(1);
            $table->string('job_title', 50);
            $table->uuid('experience_id')->nullable(); 
            $table->foreign('experience_id')->references('id')->on('experiences');
            $table->biginteger('min_salary')->nullable();
            $table->biginteger('max_salary')->nullable();
            $table->enum('salary_type', ['Yearly', 'Monthly','Weekly','Daily'])->nullable();
            $table->longText('description');
            $table->uuid('industry_id')->nullable();
            $table->foreign('industry_id')->references('id')->on('industries');
            $table->biginteger('available_seats')->default(1);
            $table->enum('shift_type', ['Remote', 'Office'])->nullable();
            $table->uuid('job_type')->nullable();
            $table->foreign('job_type')->references('id')->on('vacancies_types');
            $table->uuid('job_category')->nullable();
            $table->foreign('job_category')->references('id')->on('vacancies_categories');            
            $table->uuid('country_id')->nullable();
            $table->foreign('country_id')->references('id')->on('countries');
            $table->uuid('city_id')->nullable();
            $table->foreign('city_id')->references('id')->on('cities');
            $table->longtext('location')->nullable();
            $table->uuid('gender_id')->nullable();
            $table->foreign('gender_id')->references('id')->on('genders');
            $table->uuid('degree_id')->nullable();
            $table->foreign('degree_id')->references('id')->on('educational_degrees');
            $table->uuid('career_id')->nullable();
            $table->foreign('career_id')->references('id')->on('career_levels');
            $table->date('starting_date_for_apply')->nullable();
            $table->date('last_date_for_apply')->nullable();
            $table->integer('is_hot_job')->default(1);
            $table->integer('status');
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
        Schema::dropIfExists('vacancies');
    }
}
