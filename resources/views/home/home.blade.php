<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="{{ asset('js/api.js') }}" ></script>

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (isset($data))
    {{ $data }};
    @endif

        @if(isset($notebooks))
            @foreach ($notebooks as $notebook)
                <p>{{ $notebook->pipeline_ORG }}</p>
            @endforeach
        @endif

    <div class="content" style="width: 100%;display: flex;flex-direction: row;
            justify-content:center;align-items:center">
        <form id="logout-form" action="" method="POST" style="padding-top:60px;width: 100%;display: flex;flex-direction: row;
            justify-content:center;align-items:start">
            @csrf
            <div class="links" style="padding-top: 40px;width: 50%;display: flex;flex-direction: column;
            justify-content:center;align-items:center" >
                <label for="pipeline-ORG" class="col-md-4 col-form-label text-md-right">{{ __('pipeline-ORG') }}</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="pipeline-ORG" required>
                </div>

                <label for="pipeline-AREA" class="col-md-4 col-form-label text-md-right">{{ __('pipeline-AREA') }}</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="pipeline-AREA" required>
                </div>

                <label for="pipeline-LINE_NUMBER" class="col-md-4 col-form-label text-md-right">{{ __('pipeline-LINE_NUMBER') }}</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="pipeline-LINE_NUMBER" required>
                </div>

                <label for="pipeline-PIPE_CLASS" class="col-md-4 col-form-label text-md-right">{{ __('pipeline-PIPE_CLASS') }}</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="pipeline-PIPE_CLASS" required>
                </div>

                <label for="pipeline-MAIN_MATERIAL" class="col-md-4 col-form-label text-md-right">{{ __('pipeline-MAIN_MATERIAL') }}</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="pipeline-MAIN_MATERIAL" required>
                </div>

                <label for="pipeline-PB_PIPELINE_CATEGORY" class="col-md-4 col-form-label text-md-right">{{ __('pipeline-PB_PIPELINE_CATEGORY') }}</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="pipeline-PB_PIPELINE_CATEGORY" required>
                </div>

                <label for="pipeline-FLUID_CODE" class="col-md-4 col-form-label text-md-right">{{ __('pipeline-FLUID_CODE') }}</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="pipeline-FLUID_CODE" required>
                </div>

                <label for="elements-MEMBER_1" class="col-md-4 col-form-label text-md-right">{{ __('elements-MEMBER_1') }}</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="elements-MEMBER_1" required>
                </div>

                <label for="elements-MEMBER_2" class="col-md-4 col-form-label text-md-right">{{ __('elements-MEMBER_2') }}</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="elements-MEMBER_2" required>
                </div>

            </div>
            <div class="links" style="padding-top: 40px;width: 50%;display: flex;flex-direction: column;
            justify-content:center;align-items:center">


                <label for="characteristics-D_INCHES_MEMBER_1" class="col-md-4 col-form-label text-md-right">{{ __('characteristics-D_INCHES_MEMBER_1') }}</label>

                <div class="col-md-6">
                    <input type="number" step="0.01" class="form-control" name="characteristics-D_INCHES_MEMBER_1" required>
                </div>

                <label for="characteristics-MEMBER_1_DIAMETER_MM" class="col-md-4 col-form-label text-md-right">{{ __('characteristics-MEMBER_1_DIAMETER_MM') }}</label>

                <div class="col-md-6">
                    <input type="number"  class="form-control" name="characteristics-MEMBER_1_DIAMETER_MM" required>
                </div>

                <label for="characteristics-THICKNESS_MEMBER_1_IDENTIFICATION_SCHEDULE" class="col-md-4 col-form-label text-md-right">{{ __('characteristics-THICKNESS_MEMBER_1_IDENTIFICATION_SCHEDULE') }}</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="characteristics-THICKNESS_MEMBER_1_IDENTIFICATION_SCHEDULE" required>
                </div>

                <label for="characteristics-THICKNESS_MEMBER_1_MM" class="col-md-4 col-form-label text-md-right">{{ __('characteristics-THICKNESS_MEMBER_1_MM') }}</label>

                <div class="col-md-6">
                    <input type="number" step="0.01" class="form-control" name="characteristics-THICKNESS_MEMBER_1_MM" required>
                </div>

                <label for="characteristics-D_INCHES_MEMBER_2" class="col-md-4 col-form-label text-md-right">{{ __('characteristics-D_INCHES_MEMBER_2') }}</label>

                <div class="col-md-6">
                    <input type="number" step="0.01" class="form-control" name="characteristics-D_INCHES_MEMBER_2" required>
                </div>

                <label for="characteristics-MEMBER_2_DIAMETER_MM" class="col-md-4 col-form-label text-md-right">{{ __('characteristics-MEMBER_2_DIAMETER_MM') }}</label>

                <div class="col-md-6">
                    <input type="number" class="form-control" name="characteristics-MEMBER_2_DIAMETER_MM" required>
                </div>

                <label for="characteristics-THICKNESS_MEMBER_2_IDENTIFICATION_SCHEDULE" class="col-md-4 col-form-label text-md-right">{{ __('characteristics-THICKNESS_MEMBER_2_IDENTIFICATION_SCHEDULE') }}</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="characteristics-THICKNESS_MEMBER_2_IDENTIFICATION_SCHEDULE" required>
                </div>

                <label for="characteristics-THICKNESS_MEMBER_2_MM" class="col-md-4 col-form-label text-md-right">{{ __('characteristics-THICKNESS_MEMBER_2_MM') }}</label>

                <div class="col-md-6">
                    <input type="number" step="0.01" class="form-control" name="characteristics-THICKNESS_MEMBER_2_MM" required>
                </div>

                <label for="welding-WELDING_DATE" class="col-md-4 col-form-label text-md-right">{{ __('welding-WELDING_DATE') }}</label>

                <div class="col-md-6">
                    <input type="data" class="form-control" name="welding-WELDING_DATE" required>
                </div>

                <label for="welding-WELDING_METHOD" class="col-md-4 col-form-label text-md-right">{{ __('welding-WELDING_METHOD') }}</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="welding-WELDING_METHOD" required>
                </div>

                <label for="welding-TYPE_OF_WELDS" class="col-md-4 col-form-label text-md-right">{{ __('welding-TYPE_OF_WELDS') }}</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="welding-TYPE_OF_WELDS" required>
                </div>

                <label for="welding-TYPE_OF_JOINT" class="col-md-4 col-form-label text-md-right">{{ __('welding-TYPE_OF_JOINT') }}</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="welding-TYPE_OF_JOINT" required>
                </div>

                <label for="welding-NO_OF_THE_JOINT_AS_PER_AS_BUILT_SURVEY" class="col-md-4 col-form-label text-md-right">{{ __('welding-NO_OF_THE_JOINT_AS_PER_AS_BUILT_SURVEY') }}</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="welding-NO_OF_THE_JOINT_AS_PER_AS_BUILT_SURVEY" required>
                </div>

                <label for="welding-WELDER_S_STAMP_ROOT_PASS" class="col-md-4 col-form-label text-md-right">{{ __('welding-WELDER_S_STAMP_ROOT_PASS') }}</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="welding-WELDER_S_STAMP_ROOT_PASS" required>
                </div>

{{--                <label for="KSS" class="col-md-4 col-form-label text-md-right">{{ __('KSS') }}</label>--}}

{{--                <div class="col-md-6">--}}
{{--                    <input type="text" class="form-control" name="KSS" required>--}}
{{--                </div>--}}



            </div>
            <div class="form-row mb-3">
                <button type="submit" class="btn btn-primary">Сохранить даныне в бд</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
