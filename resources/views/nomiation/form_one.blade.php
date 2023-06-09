<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="container">

  <form method="POST" action="{{route('processForm_one')}}">
    @csrf
  <div class="form-group">
    <div class="form-group">
    <label>election_program</label>
    <input type="input" name="election_program" class="form-control">
  </div>
    <label>education</label>
    <input type="input" name="education" class="form-control">
  </div>
  <div class="form-group">
    <label>phoneNumber</label>
    <input type="input" name="phoneNumber" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">address</label>
    <input type="input" name="address" class="form-control">
  </div>
  <div class="form-group">
    <label>categories</label>
    <select id="category" name="category" class="form-control mt-1 block w-full rounded-lg py-2 ">
            <option selected>Choose Category</option>
            <option value="A">A</option>
            <option value="B">B</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Next</button>
</form>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>