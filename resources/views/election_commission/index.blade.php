@extends('election_commission.layouts.app')

@section('content')
  <!-- partial -->
      <div class="main-panel">
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
                          <th>Profile</th>
                          <th>VatNo.</th>
                          <th>Created</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Jacob</td>
                          <td>53275531</td>
                          <td>12 May 2017</td>
                          <td><label class="badge badge-danger">Pending</label></td>
                        </tr>
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
