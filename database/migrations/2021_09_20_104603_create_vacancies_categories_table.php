<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies_categories', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name', 50)->unique();
            $table->uuid('parent_id')->nullable();
            $table->integer('status')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::table('vacancies_categories', function (Blueprint $table) {
            $table->foreign('parent_id')->references('id')->on('vacancies_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacancies_categories');
    }
}
