@extends('admin.layouts.app')


@section('content')
<form class="m-4" action="{{ route('adm.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="first_name">Admin First Name</label>
        <input type="text" class="form-control" name="first_name" id="first_name"  placeholder="Enter Name">
        <small id="first_name" class="form-text text-muted">never share your information with anyone else.</small>
      </div>
      {{-- last_name  --}}
    <div class="form-group">
        <label for="last_name">Admin last Name</label>
        <input type="text" class="form-control"  name="last_name" id="last_name"  placeholder="Enter Name">
        <small id="last_name" class="form-text text-muted">never share your information with anyone else.</small>
      </div>
      {{-- End last_name  --}}

      {{-- phone_number  --}}
    <div class="form-group">
        <label for="phone_number"> Admin Phone Number</label>
        <input type="text" class="form-control"  name="phone_number" id="phone_number"  placeholder="Enter phone_number">
        <small id="phone_number" class="form-text text-muted">never share your information with anyone else.</small>
      </div>
      {{-- End phone_number  --}}

      {{-- id_number  --}}
    <div class="form-group">
        <label for="last_name">Admin ID Number</label>
        <input type="text" class="form-control"  name="id_number" id="id_number"  placeholder="Enter Name">
        <small id="id_number" class="form-text text-muted">never share your information with anyone else.</small>
      </div>
       {{-- ENd id_number  --}}
  <div class="form-group">
    <label for="exampleInputEmail1">Admin Email address</label>
    <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Admin Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="is_admin" id="is_admin" value="1">
    <label class="form-check-label" for="is_admin">
        Make Admin
    </label>
</div>
  <input type="submit" class="btn btn-primary">
</form>
@endsection