@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronic elections</title>
    
    <!-- normalize File  -->
    <link rel="stylesheet" href="{{ URL::asset('css/normalize.css'); }}">
    <!-- Font Awsome File -->
    <link rel="stylesheet" href="{{ URL::asset('css/all.css'); }} ">
    <!-- Main Css File  -->
    <link rel="stylesheet" href="{{ URL::asset('css/test.css'); }} ">
    {{-- BootStrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet" />
</head>

<body>

    <div class="landing">
        {{-- put the image here  --}}
        <div class="container">
            <div class="box box_election">
                <h3 class="text-center">الفائز في الانتخابات في هذه الدورة</h3>
                <br>
                <h3 class="text-center">المرشح</h3>
                <br>
                <div class="ml-5">
                <img  src="{{ asset('app/public/'.$candidacy_application->images->font_img)}}" alt="" width="300px" height="300px"  />
                </div>
                <div class="content">
                    <h3 class="info text-center"> الاسم :  {{ $candidacy_application->id_information->first_name }} {{ $candidacy_application->id_information->last_name }}</h3>
                    <p class="text-center"> البرنامج الانتخابي : {{ $candidacy_application->election_program }} </p>

                    <h5 class="text-center"> الفئة {{ $candidacy_application->category }}</h5>
                    <a class="btn btn-secondary" href="/">
                        Return Back
                      </a>
                </div>
            </div>
            {{-- put other information here  --}}
        </div>
    </div>
</body>
@endsection