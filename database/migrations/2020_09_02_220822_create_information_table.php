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
            $table->string('pipeline-ORG', 100)->collation('utf8_general_ci');
            $table->index('pipeline-ORG', 'pipeline-ORG');
            $table->string('pipeline-AREA', 100)->collation('utf8_general_ci');
            $table->index('pipeline-AREA', 'pipeline-AREA');
            $table->string('pipeline-LINE_NUMBER', 100)->collation('utf8_general_ci');
            $table->index('pipeline-LINE_NUMBER', 'pipeline-LINE_NUMBER');
            $table->string('pipeline-PIPE_CLASS', 100)->collation('utf8_general_ci');
            $table->string('pipeline-MAIN_MATERIAL', 100)->collation('utf8_general_ci');
            $table->string('pipeline-PB_PIPELINE_CATEGORY', 100)->collation('utf8_general_ci');
            $table->string('pipeline-FLUID_CODE', 100)->collation('utf8_general_ci');
            $table->string('elements-MEMBER_1', 100)->collation('utf8_general_ci');
            $table->string('elements-MEMBER_2', 100)->collation('utf8_general_ci');

            $table->double('characteristics-D_INCHES_MEMBER_1');
            $table->integer('characteristics-MEMBER_1_DIAMETER_MM');
            $table->string('characteristics-THICKNESS_MEMBER_1_IDENTIFICATION_SCHEDULE', 100)
                ->collation('utf8_general_ci');
            $table->double('characteristics-THICKNESS_MEMBER_1_MM');
            $table->double('characteristics-D_INCHES_MEMBER_2');
            $table->integer('characteristics-MEMBER_2_DIAMETER_MM');
            $table->string('characteristics-THICKNESS_MEMBER_2_IDENTIFICATION_SCHEDULE', 100)
                ->collation('utf8_general_ci');
            $table->double('characteristics-THICKNESS_MEMBER_2_MM');
            $table->date('welding-WELDING_DATE');
            $table->index('welding-WELDING_DATE', 'welding-WELDING_DATE');
            $table->string('welding-WELDING_METHOD', 100)
                ->collation('utf8_general_ci');
            $table->string('welding-TYPE_OF_WELDS', 100)->collation('utf8_general_ci');
            $table->string('welding-TYPE_OF_JOINT', 100)->collation('utf8_general_ci');
            $table->string('welding-NO_OF_THE_JOINT_AS_PER_AS_BUILT_SURVEY', 100)
                ->collation('utf8_general_ci');
            $table->string('welding-WELDER_S_STAMP_ROOT_PASS', 100)
                ->collation('utf8_general_ci');
            $table->index('welding-WELDER_S_STAMP_ROOT_PASS', 'welding-WELDER_S_STAMP_ROOT_PASS');
            $table->json('KSS')->nullable();
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
