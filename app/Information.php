<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{

    protected $fillable = ['pipeline-ORG','pipeline-AREA','pipeline-LINE_NUMBER',
        'pipeline-PIPE_CLASS','pipeline-MAIN_MATERIAL','pipeline-PB_PIPELINE_CATEGORY',
        'pipeline-FLUID_CODE','elements-MEMBER_1','elements-MEMBER_2',
        'characteristics-D_INCHES_MEMBER_1','characteristics-MEMBER_1_DIAMETER_MM',
        'characteristics-THICKNESS_MEMBER_1_IDENTIFICATION_SCHEDULE',
        'characteristics-THICKNESS_MEMBER_1_MM','characteristics-D_INCHES_MEMBER_2',
        'characteristics-MEMBER_2_DIAMETER_MM','characteristics-THICKNESS_MEMBER_2_IDENTIFICATION_SCHEDULE',
        'characteristics-THICKNESS_MEMBER_2_MM','welding-WELDING_DATE',
        'welding-WELDING_METHOD','welding-TYPE_OF_WELDS','welding-TYPE_OF_JOINT',
        'welding-NO_OF_THE_JOINT_AS_PER_AS_BUILT_SURVEY','welding-WELDER_S_STAMP_ROOT_PASS',
        'KSS'
    ];
    public $timestamps = false;
}
