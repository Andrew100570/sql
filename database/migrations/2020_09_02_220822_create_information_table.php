<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->string('pipeline_ORG', 100)->collation('utf8_general_ci');
            $table->index('pipeline_ORG', 'pipeline-ORG');
            $table->string('pipeline_AREA', 100)->collation('utf8_general_ci');
            $table->index('pipeline_AREA', 'pipeline-AREA');
            $table->string('pipeline_LINE_NUMBER', 100)->collation('utf8_general_ci');
            $table->index('pipeline_LINE_NUMBER', 'pipeline-LINE_NUMBER');
            $table->string('pipeline_PIPE_CLASS', 100)->collation('utf8_general_ci');
            $table->string('pipeline_MAIN_MATERIAL', 100)->collation('utf8_general_ci');
            $table->string('pipeline_PB_PIPELINE_CATEGORY', 100)->collation('utf8_general_ci');
            $table->string('pipeline_FLUID_CODE', 100)->collation('utf8_general_ci');
            $table->string('elements_MEMBER_1', 100)->collation('utf8_general_ci');
            $table->string('elements_MEMBER_2', 100)->collation('utf8_general_ci');

            $table->double('characteristics_D_INCHES_MEMBER_1');
            $table->integer('characteristics_MEMBER_1_DIAMETER_MM');
            $table->string('characteristics_THICKNESS_MEMBER_1_IDENTIFICATION_SCHEDULE', 100)
                ->collation('utf8_general_ci');
            $table->double('characteristics_THICKNESS_MEMBER_1_MM');
            $table->double('characteristics_D_INCHES_MEMBER_2');
            $table->integer('characteristics_MEMBER_2_DIAMETER_MM');
            $table->string('characteristics_THICKNESS_MEMBER_2_IDENTIFICATION_SCHEDULE', 100)
                ->collation('utf8_general_ci');
            $table->double('characteristics_THICKNESS_MEMBER_2_MM');
            $table->date('welding_WELDING_DATE');
            $table->index('welding_WELDING_DATE', 'welding-WELDING_DATE');
            $table->string('welding_WELDING_METHOD', 100)
                ->collation('utf8_general_ci');
            $table->string('welding_TYPE_OF_WELDS', 100)->collation('utf8_general_ci');
            $table->string('welding_TYPE_OF_JOINT', 100)->collation('utf8_general_ci');
            $table->string('welding_NO_OF_THE_JOINT_AS_PER_AS_BUILT_SURVEY', 100)
                ->collation('utf8_general_ci');
            $table->string('welding_WELDER_S_STAMP_ROOT_PASS', 100)
                ->collation('utf8_general_ci');
            $table->index('welding_WELDER_S_STAMP_ROOT_PASS', 'welding-WELDER_S_STAMP_ROOT_PASS');
            //$table->json('KSS')->nullable();
            //$table->timestamps();

           });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('information');
    }
}
