@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronic elections</title>
    
    <!-- normalize File  -->
    <link rel="stylesheet" href="{{ URL::asset('css/normalize.css'); }}">
    <!-- Font Awsome File -->
    <link rel="stylesheet" href="{{ URL::asset('css/all.css'); }} ">
    <!-- Main Css File  -->
    <link rel="stylesheet" href="{{ URL::asset('css/test.css'); }} ">
    {{-- BootStrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="landing">
        {{-- put the image here  --}}
        <div class="container">
            <div class="box box_election">
                <img decoding="async" src="{{ URL::asset('images/cat-02.jpg'); }}" alt="" width="400px" height="400" style="margin-bottom: 10px" />
                <div class="content">
                    <h3 class="info"> Name: {{ $candidacy_application->id_information->first_name }} {{ $candidacy_application->id_information->last_name }}</h3>
                    <p>Election Program : {{ $candidacy_application->election_program }}</p>
                    <h5> Category : {{ $candidacy_application->category }}</h5>

                    {{-- <a class="btn btn-success" href="#" id="election-btn" style="margin-right: 15px">
                        Election Now !
                    </a> --}}
                    <div id="dialog-box">
                        <div id="dialog-message"></div>
                        <div id="dialog-buttons">
                            <form  action="#" method="POST">
                                @csrf
                                <button id="dialog-yes" type="submit">Yes</button>
                                
                            </form>
                            <button id="dialog-no">No</button>
                        </div>
                    </div>
                    
                    <!-- The button that triggers the dialog box -->
                    <button id="election-btn">Election Now !</button>
{{--                     
                    <script>
                        var electionBtn = document.getElementById("election-btn");
                    
                        electionBtn.addEventListener("click", function() {
                            var confirmMsg = "Are you sure you want to start the election?";
                            if (confirm(confirmMsg)) {
                                // The user clicked "OK", continue with the election process
                                // Add your code here to initiate the election
                            } else {
                                // The user clicked "Cancel", do nothing
                            }
                        });
                    </script> --}}
                    <a class="btn btn-secondary" href="#">
                        Return Back
                      </a>
                </div>
            </div>
           
            {{-- put other information here  --}}
        </div>
    </div>
</body>
<script>
// Get references to the elements
var electionBtn = document.getElementById("election-btn");
var dialogBox = document.getElementById("dialog-box");
var dialogMsg = document.getElementById("dialog-message");
var dialogYes = document.getElementById("dialog-yes");
var dialogNo = document.getElementById("dialog-no");

// Add an event listener to the button that triggers the dialog box
electionBtn.addEventListener("click", function() {
    // Show the dialog box
    dialogBox.style.display = "block";
    
    // Set the dialog message
    dialogMsg.textContent = "Are you sure you want to start the election?";
});

// Add event listeners to the "Yes" and "No" buttons
dialogYes.addEventListener("click", function() {
    // The user clicked "Yes", continue with the election process
    // Add your code here to initiate the election

    dialogBox.style.display = "none";
});

dialogNo.addEventListener("click", function() {
    // The user clicked "No", hide the dialog box
    dialogBox.style.display = "none";
});
</script>
@endsection