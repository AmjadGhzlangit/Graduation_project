@extends('election_commission.layouts.app')

@section('content')

<div class="main-panel">
        <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Candidacy_Applications </h3>
            <nav aria-label="breadcrumb">
            </nav>
        </div>
        <div class="column">
            <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Number of Application</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Father Name</th>
                        <th>Mother Name</th>
                        <th>Birthday</th>
                        <th>Eduction</th>
                        <th>Election Program</th>
                        <th>Category</th>
                        <th>Gender</th>
                        
                        <th>address</th>
                    </tr>
                    </thead>
                    
                    <tbody>
                    <tr style="text-align: center">
                        <td>{{$candidacy_application->id}}</td>
                        <td>{{$candidacy_application->id_information->first_name}}</td>
                        <td>{{$candidacy_application->id_information->last_name}}</td>
                        <td>{{$candidacy_application->id_information->father_name}}</td>
                        <td>{{$candidacy_application->id_information->mother_name}}</td>
                        <td>{{$candidacy_application->id_information->birthday}}</td>
                        <td>{{$candidacy_application->education}}</td>
                        <td>{{$candidacy_application->election_program}}</td>
                        <td>
                            {{$candidacy_application->category}}
                        </td>
                        <td>
                            {{$candidacy_application->id_information->gender}}
                        </td>
                        <td>
                            {{$candidacy_application->address}}
                        </td>
                        <div class="d-inline">
                        <form action="{{route('active',$candidacy_application)}}" method="POST">
                            @csrf
                            @method('PUT')
                        <button type="submit"
                                class="btn btn-success">
                                Accept Application
                        </button>                       
                    </form>
                </div>
                    <form action="{{route('destroy',$candidacy_application)}}" method="POST">
                            @csrf
                            @method('PUT')
                        <button type="submit"
                                class="btn btn-danger">
                                Delete Application
                        </button>                       
                    </form>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
        <div>
         <div class="row">
            <div class="col-3">
            <a href="{{ asset('app/public/'.$candidacy_application->images->font_img)}}" target="_blank">
                <img src="{{ asset('app/public/'.$candidacy_application->images->font_img)}}" width="250px" height="250px" alt="Image">
                </a>
            </div>
            <div class="col-3">
            <a href="{{ asset('app/public/'.$candidacy_application->images->back_img)}}" target="_blank">
                <img src="{{ asset('app/public/'.$candidacy_application->images->back_img)}}" width="250px" height="250px" alt="Image">
                </a>
            </div>
            <div class="col-3">
            <a href="{{ asset('app/public/'.$candidacy_application->images->registerWork_img)}}" target="_blank">
                <img src="{{ asset('app/public/'.$candidacy_application->images->registerWork_img)}}" width="250px" height="250px" alt="Image">
                </a>
            </div>
            <div class="col-3">
            <a href="{{ asset('app/public/'.$candidacy_application->images->familyDocument_img)}}" target="_blank">
                <img src="{{ asset('app/public/'.$candidacy_application->images->familyDocument_img)}}" width="250px" height="250px" alt="Image">
                </a>
            </div>
        </div>
        <br>
        <div class="row">
             <div class="col-3">
             <a href="{{ asset('app/public/'.$candidacy_application->images->residenceDocument_img)}}" target="_blank">
                <img src="{{ asset('app/public/'.$candidacy_application->images->residenceDocument_img)}}" width="250px" height="250px" alt="Image">
                </a>
            </div>
            <div class="col-3">
             <a href="{{ asset('app/public/'.$candidacy_application->images->education_img)}}" target="_blank">
                <img src="{{ asset('app/public/'.$candidacy_application->images->education_img)}}" width="250px" height="250px" alt="Image">
                </a>
            </div>
            <div class="col-3">
             <a href="{{ asset('app/public/'.$candidacy_application->images->convicationDocument_img)}}" target="_blank">
                <img src="{{ asset('app/public/'.$candidacy_application->images->convicationDocument_img)}}" width="250px" height="250px" alt="Image">
                </a>
            </div>
            <br>
           
            <div class="col-3">
             <a href="{{ asset('app/public/'.$candidacy_application->images->medicalExamination_img)}}" target="_blank">
                <img src="{{ asset('app/public/'.$candidacy_application->images->medicalExamination_img)}}" width="250px" height="250px" alt="Image">
                </a>
            </div>
        
        </div>
        </div>
    </div>
@endsection