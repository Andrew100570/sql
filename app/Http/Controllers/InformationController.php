<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;

class InformationController extends Controller
{

    public function index()
    {
        return view('home.home');
    }

    public function create(Request $request)    {

            $n1 = strip_tags($request->all()['pipeline-ORG']);
            $n1 = htmlspecialchars($n1, ENT_QUOTES);

            $n2 = strip_tags($request->all()['pipeline-AREA']);
            $n2 = htmlspecialchars($n2, ENT_QUOTES);

            $n3 = strip_tags($request->all()['pipeline-LINE_NUMBER']);
            $n3 = htmlspecialchars($n3, ENT_QUOTES);

            $n4 = strip_tags($request->all()['pipeline-PIPE_CLASS']);
            $n4 = htmlspecialchars($n4, ENT_QUOTES);

            $n5 = strip_tags($request->all()['pipeline-MAIN_MATERIAL']);
            $n5 = htmlspecialchars($n5, ENT_QUOTES);

            $n6 = strip_tags($request->all()['pipeline-PB_PIPELINE_CATEGORY']);
            $n6 = htmlspecialchars($n6, ENT_QUOTES);

            $n8 = strip_tags($request->all()['pipeline-FLUID_CODE']);
            $n8 = htmlspecialchars($n8, ENT_QUOTES);

            $n9 = strip_tags($request->all()['elements-MEMBER_1']);
            $n9 = htmlspecialchars($n9, ENT_QUOTES);

            $n10 = strip_tags($request->all()['elements-MEMBER_2']);
            $n10 = htmlspecialchars($n10, ENT_QUOTES);

            $n11 = strip_tags($request->all()['characteristics-D_INCHES_MEMBER_1']);

            $n12 = strip_tags($request->all()['characteristics-MEMBER_1_DIAMETER_MM']);

            $n13 = strip_tags($request->all()['characteristics-THICKNESS_MEMBER_1_IDENTIFICATION_SCHEDULE']);
            $n13 = htmlspecialchars($n13, ENT_QUOTES);

            $n14 = strip_tags($request->all()['characteristics-MEMBER_1_DIAMETER_MM']);

            $n15 = strip_tags($request->all()['characteristics-D_INCHES_MEMBER_2']);

            $n16 = strip_tags($request->all()['characteristics-MEMBER_2_DIAMETER_MM']);

            $n17 = strip_tags($request->all()['characteristics-THICKNESS_MEMBER_2_IDENTIFICATION_SCHEDULE']);
            $n17 = htmlspecialchars($n17, ENT_QUOTES);

            $n18 = strip_tags($request->all()['characteristics-THICKNESS_MEMBER_2_MM']);

            $n19 = $request->all()['welding-WELDING_DATE'];

            $n20 = strip_tags($request->all()['welding-WELDING_METHOD']);
            $n20 = htmlspecialchars($n20, ENT_QUOTES);

            $n21 = strip_tags($request->all()['welding-TYPE_OF_WELDS']);
            $n21 = htmlspecialchars($n21, ENT_QUOTES);

            $n22 = strip_tags($request->all()['welding-TYPE_OF_JOINT']);
            $n22 = htmlspecialchars($n22, ENT_QUOTES);

            $n23 = strip_tags($request->all()['welding-NO_OF_THE_JOINT_AS_PER_AS_BUILT_SURVEY']);
            $n23 = htmlspecialchars($n23, ENT_QUOTES);

            $n24 = strip_tags($request->all()['welding-WELDER_S_STAMP_ROOT_PASS']);
            $n24 = htmlspecialchars($n23, ENT_QUOTES);

            $n26 = strip_tags($request->all()['characteristics-THICKNESS_MEMBER_1_MM']);



//            $n25 = $request->all()['KSS'];


            $save = new Information();
            $save->pipeline_ORG = $n1;
            $save->pipeline_AREA = $n2;
            $save->pipeline_LINE_NUMBER = $n3;
            $save->pipeline_PIPE_CLASS = $n4;
            $save->pipeline_MAIN_MATERIAL = $n5;
            $save->pipeline_PB_PIPELINE_CATEGORY = $n6;
            $save->pipeline_FLUID_CODE = $n8;
            $save->elements_MEMBER_1 = $n9;
            $save->elements_MEMBER_2 = $n10;
            $save->characteristics_D_INCHES_MEMBER_1 = $n11;
            $save->characteristics_MEMBER_1_DIAMETER_MM = $n12;
            $save->characteristics_THICKNESS_MEMBER_1_IDENTIFICATION_SCHEDULE = $n13;
            $save->characteristics_MEMBER_1_DIAMETER_MM = $n14;
            $save->characteristics_D_INCHES_MEMBER_2 = $n15;
            $save->characteristics_MEMBER_2_DIAMETER_MM = $n16;
            $save->characteristics_THICKNESS_MEMBER_2_IDENTIFICATION_SCHEDULE = $n17;
            $save->characteristics_THICKNESS_MEMBER_2_MM = $n18;
            $save->welding_WELDING_DATE = $n19;
            $save->welding_WELDING_METHOD = $n20;
            $save->welding_TYPE_OF_WELDS = $n21;
            $save->welding_TYPE_OF_JOINT = $n22;
            $save->welding_NO_OF_THE_JOINT_AS_PER_AS_BUILT_SURVEY = $n23;
            $save->welding_WELDER_S_STAMP_ROOT_PASS = $n24;
            $save->characteristics_THICKNESS_MEMBER_1_MM = $n26;
//            $save->KSS = $n25;

            $save->save();

        $data = 'Данные высланы!';
        return view('home.home',['data' => $data]);
    }


}
