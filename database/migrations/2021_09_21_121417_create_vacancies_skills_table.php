<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies_skills', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('vacancy_id');
            $table->foreign('vacancy_id')->references('id')->on('vacancies');
            $table->uuid('skill_id')->nullable(); 
            $table->foreign('skill_id')->references('id')->on('skills');
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
        Schema::dropIfExists('vacancies_skills');
    }
}
