<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScholarshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholarship', function (Blueprint $table) {
            $table->increments('scholarshipId');
            $table->string('scholarshipCode');
            $table->string('sponsor');
            $table->string('scholarshipName');
            $table->string('schedule');
            $table->tinyInteger('isGovernmentScholarship');
            $table->tinyInteger('isOtherRestrictions');
            $table->tinyInteger('isStudent');
            $table->Integer('schoolId');
            $table->Integer('collegeId');
            $table->Integer('departmentId');
            $table->Integer('disciplineId');
            $table->tinyInteger('isPublic');
            $table->tinyInteger('isPrivate');
            $table->Integer('educationSystemId');
            $table->Integer('intellectualEducation');
            $table->Integer('moralEducation');
            $table->Integer('physicalEducation');
            $table->Integer('averageScore');
            $table->Integer('nationId')->default('0');
            $table->Integer('countyId')->default('0');
            $table->string('amount');
            $table->text('quota');
            $table->text('condition');
            $table->text('contactInfomation');
            $table->string('deadline');
            $table->string('contactNameber');
            $table->string('organizer');
            $table->string('announcementWebsite');
            $table->Integer('accountIdOfDuty');
            $table->Integer('accountIdOfReview');
            $table->tinyInteger('isLaunch')->default('0');
            $table->Integer('accountIdOfLaunch');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scholarship');
    }
}
