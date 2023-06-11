@extends('election_commission.layouts.app')

@section('content')
  <!-- partial -->
      <div class="main-panel">
        @if(session('success'))
        <div class="alert alert-success text-center">
            <span class="container" >
            {{ session('success') }}
        </span>
        </div>
        @endif
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Candidacy_Applications </h3>
              <nav aria-label="breadcrumb">
              </nav>
            </div>
            <div class="row">
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
                        @foreach ($candidacy_applications as $candidacy_application)
                        <tr style="text-align: center">
                          <td>{{$candidacy_application->id}}</td>
                          <td>{{$candidacy_application->id_information->first_name}}</td>
                          <td>{{$candidacy_application->id_information->last_name}}</td>
                          <td>{{$candidacy_application->id_information->father_name}}</td>
                          <td>{{$candidacy_application->id_information->mother_name}}</td>
                          <td>{{$candidacy_application->id_information->birthday}}</td>
                          <td>{{$candidacy_application->education}}</td>
                          <td>{{$candidacy_application->election_program}}</td>
                          <td>{{$candidacy_application->category}}</td>
                          <td>
                            @if($candidacy_application->status){
                              <label class="badge badge-success">Accept</label>
                            }
                            @else
                            {
                              <label class="badge badge-danger">Not Accecpt</label>
                            }
                            @endif
                          </td>
                            <td>
                              <a href="{{route('blank',$candidacy_application)}}">Read more →</a>

                            </td>
                        </tr>
                        @endforeach
                     
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- main-panel ends -->
@endsection




{{-- <!DOCTYPE html>
<html lang="en">
  <head> --}}
    <!-- Required meta tags -->
    {{-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Election_Commission</title> --}}
    {{-- includ css code  --}}
    {{-- @include('election_commission.css.app_css')
  </head>
  <body> --}}

    {{-- nav bar section  --}}
      {{-- <div>
        @include('election_commission.layouts.nav_bar')
    </div>

    <div> --}}
      {{-- sidebar section --}}
    {{-- @include('election_commission.layouts.sidebar'); --}}
      {{--End sidebar section --}}

    {{-- </div> --}}
    {{-- include js flie --}}
    {{-- @include('election_commission.layouts.js')
  </body>
</html> --}}
