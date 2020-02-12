<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('firstname');
            $table->string('surname');
            $table->string('email');
            $table->string('country_of_residence');
            $table->date('date_of_birth');
            $table->string('company');
            $table->string('years_working_experience');
            $table->string('university_grade');
            $table->string('education_test_grade');
            $table->string('english_grade');
            $table->string('mathematics_grade');
            $table->string('english_test_year');
            $table->string('test_score');
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
        Schema::dropIfExists('registrations');
    }
}
