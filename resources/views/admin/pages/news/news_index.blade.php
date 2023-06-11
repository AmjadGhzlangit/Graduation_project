@extends('admin.layouts.app')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> News </h3>
        <nav aria-label="breadcrumb">
          @if (session('message'))
          <div class="alert alert-success text-center">
            <span class="container" >
            {{ session('message') }}
        </span>
          @endif
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
                    <th>Descrition</th>
                    <th>image</th> 
                    <th>Action</th> 
                  </tr>
                </thead>
                @foreach ($news as $one_news)
                <tbody>
                  
                        <td>{{ $one_news->title }}</td>
                        <td>{{ $one_news->description }}</td>
                        <td><img src="{{ asset('app/public/'.$one_news->image_path) }}" alt="" width="30px" height="30px"></td>
                        <td>
                          <form action="{{ route('news.show', $one_news->id) }}" method="GET">
                            @csrf
                         
                        <input type="submit" class="btn btn-success" value="Edit">
                      </form>
                      
                      {{-- <a class="btn btn-success"  href=""{{ route('news.show',$one_news->id) }}>
                            Edit
                          </a> --}}
                        </td>
                        <td>
                            <form action="{{ route('news.destroy', $one_news->id) }}" method="POST">
                                @csrf
                                @method('delete')
                            <input type="submit" class="btn btn-danger" value="Delete">
                          </form>
                        </td>
                      
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


  
