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
                        <th>Status</th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    
                    <tbody>
                    <tr style="text-align: center">
                        <td>{{$candidacy_application->images->font_img}}</td>
                        <td>{{$candidacy_application->id_information->first_name}}</td>
                        <td>{{$candidacy_application->id_information->last_name}}</td>
                        <td>{{$candidacy_application->id_information->father_name}}</td>
                        <td>{{$candidacy_application->id_information->mother_name}}</td>
                        <td>{{$candidacy_application->id_information->birthday}}</td>
                        <td>{{$candidacy_application->education}}</td>
                        <td>{{$candidacy_application->election_program}}</td>
                        <td>
                            <label class="badge badge-danger">
                            {{$candidacy_application->status}}
                        </td>
                        <form action="{{route('active',$candidacy_application)}}" method="POST">
                            @csrf
                            @method('PUT')
                        <button type="submit"
                                class="btn btn-success">
                                
                        </button>                       
                    </form>
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
            <img 
src="{{ asset('storage/images/' .$candidacy_application->images->back_img)}}" width="100px" height="100px" alt="Image">        </div>
        </div>
    </div>
@endsection