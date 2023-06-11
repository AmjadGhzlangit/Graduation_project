@extends('election_commission.layouts.app')


@section('content')

<form class="m-4" action="{{ route('store_election_data') }}" method="post">
    @csrf
    @if(session('error'))
<div class="alert alert-danger text-center">
    <span class="container" >
    {{ session('error') }}
</span>
</div>
@endif
    <div class="form-group">
        <label for="start_election"> Start Election</label>
        <input type="date" class="form-control" name="start_election" id="start_election"  placeholder="Enter Date For Start Election">
      </div>
    <div class="form-group">
        <label for="end_election"> End Election</label>
        <input type="date" class="form-control" name="end_election" id="end_election"  placeholder="Enter Date For Start Election">
      </div>
    
  <input type="submit" class="btn btn-primary">
</form>

@endsection