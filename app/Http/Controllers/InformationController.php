<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Test;

class InformationController extends Controller
{

    public function index()
    {
       return view('home.home');
    }

    public function get(){
        $notebooks = Test::all();

        $result=$this->convert($notebooks);
        return response()->json($result);
    }

    public function convert($notebooks)
    {
        $result = [
            "status"=>"1",
            "error"=>""
        ];

        $result['data'] =
            ['head'=>
                [
                "id",
                "pipeline_ORG",
                "pipeline_AREA",
                "pipeline_LINE_NUMBER",
                "pipeline_PIPE_CLASS",
                "pipeline_MAIN_MATERIAL",
                "pipeline_PB_PIPELINE_CATEGORY",
                "pipeline_FLUID_CODE",
                "elements_MEMBER_1",
                "elements_MEMBER_2",
                "characteristics-D_INCHES_MEMBER_1",
                "characteristics-MEMBER_1_DIAMETER_MM",
                "characteristics-THICKNESS_MEMBER_1_IDENTIFICATION_SCHEDULE",
                "characteristics_THICKNESS_MEMBER_1_MM",
                "characteristics-D_INCHES_MEMBER_2",
                "characteristics-MEMBER_2_DIAMETER_MM",
                "characteristics-THICKNESS_MEMBER_2_IDENTIFICATION_SCHEDULE",
                "characteristics-THICKNESS_MEMBER_2_MM",
                "welding-WELDING_DATE",
                "welding-WELDING_METHOD",
                "welding-TYPE_OF_WELDS",
                "welding-TYPE_OF_JOINT",
                "welding-NO_OF_THE_JOINT_AS_PER_AS_BUILT_SURVEY",
                "welding-WELDER_S_STAMP_ROOT_PASS",
                "characteristics-THICKNESS_MEMBER_1_MM",
                ]
            ];



        foreach ($notebooks as $notebook){
//            $result['body'][$notebook->id] = [];
//            foreach($result['data']['head'] as $columnname){
//
//              echo  $columnname.':'.$notebook[$columnname].'<br/>';
//              array_push($result['body'][$notebook->id],$notebook[$columnname]);
//            }
            $result['body'][$notebook->id] =
            [
                $notebook['id'],
                $notebook['pipeline_ORG'],
                $notebook['pipeline_AREA'],
                $notebook['pipeline_LINE_NUMBER'],
                $notebook['pipeline_PIPE_CLASS'],

                $notebook['pipeline_MAIN_MATERIAL'],
                $notebook['pipeline_PB_PIPELINE_CATEGORY'],
                $notebook['pipeline_FLUID_CODE'],
                $notebook['elements_MEMBER_1'],
                $notebook['elements_MEMBER_2'],

                $notebook['characteristics-D_INCHES_MEMBER_1'],
                $notebook['characteristics-MEMBER_1_DIAMETER_MM'],
                $notebook['characteristics-THICKNESS_MEMBER_1_IDENTIFICATION_SCHEDULE'],
                $notebook['characteristics-MEMBER_1_DIAMETER_MM'],
                $notebook['characteristics-D_INCHES_MEMBER_2'],


                $notebook['characteristics-MEMBER_2_DIAMETER_MM'],
                $notebook['characteristics-THICKNESS_MEMBER_2_IDENTIFICATION_SCHEDULE'],
                $notebook['characteristics-THICKNESS_MEMBER_2_MM'],
                $notebook['welding-WELDING_DATE'],
                $notebook['welding-WELDING_METHOD'],

                $notebook['welding-TYPE_OF_WELDS'],
                $notebook['welding-TYPE_OF_JOINT'],
                $notebook['welding-NO_OF_THE_JOINT_AS_PER_AS_BUILT_SURVEY'],
                $notebook['welding-WELDER_S_STAMP_ROOT_PASS'],
                $notebook['characteristics-THICKNESS_MEMBER_1_MM'],

            ];
        }

        return $result;
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

            $save = new Test();

            $save['pipeline-ORG'] = $n1;
            $save['pipeline-AREA'] = $n2;
            $save['pipeline-LINE_NUMBER'] = $n3;
            $save['pipeline-PIPE_CLASS'] = $n4;
            $save['pipeline-MAIN_MATERIAL'] = $n5;
            $save['pipeline-PB_PIPELINE_CATEGORY'] = $n6;
            $save['pipeline-FLUID_CODE'] = $n8;
            $save['elements-MEMBER_1'] = $n9;
            $save['elements-MEMBER_2'] = $n10;
            $save['characteristics-D_INCHES_MEMBER_1'] = $n11;
            $save['characteristics-MEMBER_1_DIAMETER_MM'] = $n12;
            $save['characteristics-THICKNESS_MEMBER_1_IDENTIFICATION_SCHEDULE'] = $n13;
            $save['characteristics-MEMBER_1_DIAMETER_MM'] = $n14;
            $save['characteristics-D_INCHES_MEMBER_2'] = $n15;
            $save['characteristics-MEMBER_2_DIAMETER_MM'] = $n16;
            $save['characteristics-THICKNESS_MEMBER_2_IDENTIFICATION_SCHEDULE'] = $n17;
            $save['characteristics-THICKNESS_MEMBER_2_MM'] = $n18;
            $save['welding-WELDING_DATE'] = $n19;
            $save['welding-WELDING_METHOD'] = $n20;
            $save['welding-TYPE_OF_WELDS'] = $n21;
            $save['welding-TYPE_OF_JOINT']  = $n22;
            $save['welding-NO_OF_THE_JOINT_AS_PER_AS_BUILT_SURVEY'] = $n23;
            $save['welding-WELDER_S_STAMP_ROOT_PASS'] = $n24;
            $save['characteristics-THICKNESS_MEMBER_1_MM'] = $n26;
//            $save->KSS = $n25;

            $save->save();

        $data = 'Данные высланы!';
        return view('home.home',['data' => $data]);
    }

    public function add(){

        return view('home.api.add');
    }

    public function addFile(Request $request){

        $sql_script = file_get_contents($request->file('userfile')->getRealPath());
        $result = DB::unprepared($sql_script);

        echo "Запись произведена в БД";
    }



}
