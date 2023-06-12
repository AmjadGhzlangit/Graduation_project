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

  <form method="POST" action="{{route('processId_form')}}">
    @csrf
    
  <div class="form-group">
    <label for="first_name">الاسم الاول</label>
    <input type="input" name="first_name" class="form-control">
  </div>
  <div class="form-group">
    <label for="last_name">الكنية</label>
    <input type="input" name="last_name" class="form-control">
  </div>
  <div class="form-group">
    <label for="father_name">اسم الاب</label>
    <input type="input" name="father_name" class="form-control">
  </div>
  <div class="form-group">
    <label for="mother_name">اسم الأم</label>
    <input type="input" name="mother_name" class="form-control">
  </div>
  <div class="form-group">
    <label for="birthday">التولد</label>
    <input type="date" name="birthday" class="form-control">
  </div>
  <div class="form-group">
    <label for="place_birth">place_birth</label>
    <input type="input" name="place_birth" class="form-control">
  </div>
  <div class="form-group">
    <label for="place_registration">مكان القيد</label>
    <input type="input" name="place_registration" class="form-control">
  </div>
  <div class="form-group">
    <label for="number_registration">رقم القيد</label>
    <input type="input" name="number_registration" class="form-control">
  </div>
  <div class="form-group">
    <label for="gender">الجنس</label>
    <select id="gender" name="gender" class="form-control">
            <option selected>Choose Gender</option>
            <option value="male">ذكر</option>
            <option value="female">أنثى</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">التالي</button>

</form>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>