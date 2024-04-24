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
        Schema::create('student_forms', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->text('current_address');
            $table->string('email');
            $table->string('contact_number');
            $table->string('country_of_citizenship');
            $table->string('visa_status');
            $table->string('visa_status_other')->nullable();
            $table->string('highest_education_level');
            $table->string('enrolled_course');
            $table->string('purpose_of_visit');
            $table->text('special_conditions')->nullable();
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
        Schema::dropIfExists('student_forms');
    }
};
