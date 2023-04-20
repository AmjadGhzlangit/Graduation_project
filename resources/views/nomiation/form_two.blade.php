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
  <form method="POST" action="{{route('processForm_two')}}" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="font-img" class="block font-medium text-sm text-gray-700">Front Image</label>
    <input type="file" name="font-img" class="form-control">
  </div>
  <div class="form-group">
    <label for="back-img">back-img</label>
    <input type="file" name="back-img" class="form-control">
  </div>
  <div class="form-group">
    <label for="registerWork-img">registerWork-img</label>
    <input type="file" name="registerWork-img" class="form-control">
  </div>
  <div class="form-group">
    <label for="familyDocument-img">familyDocument-img</label>
    <input type="file" name="familyDocument-img" class="form-control">
  </div>
  <div class="form-group">
    <label for="residenceDocument-img">residenceDocument-img</label>
    <input type="file" name="residenceDocument-img" class="form-control">
  </div>
  <div class="form-group">
    <label for="education-img">education-img</label>
    <input type="file" name="education-img" class="form-control">
  </div>
  <div class="form-group">
    <label for="convicationDocument-img">convicationDocument-img</label>
    <input type="file" name="convicationDocument-img" class="form-control">
  </div>
  <div class="form-group">
    <label for="medicalExamination-img">medicalExamination-img</label>
    <input type="file" name="medicalExamination-img" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Save</button>

  </form>
  <h1>this form tow</h1>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>