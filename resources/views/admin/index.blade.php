@extends('admin.layouts.app')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">  Today Messages </h3>
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
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th> 
                    <th>Action</th> 
                  </tr>
                </thead>
                @foreach ($messages as $message)
                <tbody>
                  
                        <td>{{ $message->name }}</td>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->message }}</td>
                        <td><a class="btn btn-success" href="#">
                            Solve
                          </a>
                        </td>
                        <td>
                            <form action="{{ route('messages.delete',$message) }}" method="POST">
                                @csrf
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </td>
                    </form>
                </tbody>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection


  
