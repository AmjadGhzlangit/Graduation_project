<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Election_Commission</title>
<!-- plugins:css -->
<link rel="stylesheet" href="{{ asset('election_commission/vendors/mdi/css/materialdesignicons.min.css') }}" >
<link rel="stylesheet" href="{{ asset('election_commission/vendors/flag-icon-css/css/flag-icon.min.css') }}">
<link rel="stylesheet" href="{{ asset('election_commission/vendors/css/vendor.bundle.base.css') }}">
<!-- endinject -->
<!-- Plugin css for this page -->
<link rel="stylesheet" href="{{ asset('election_commission/vendors/font-awesome/css/font-awesome.min.css') }}" />
<link rel="stylesheet" href="{{ asset('election_commission/vendors/bootstrap-datepicker/bootstrap-datepicker.min.csss') }}">
<!-- End plugin css for this page -->
<!-- inject:css -->
<!-- endinject -->
<!-- Layout styles -->
<link rel="stylesheet" href="{{ asset('election_commission/css/style.css') }}">
<!-- End layout styles -->
<link rel="shortcut icon" href="{{ asset('election_commission/images/favicon.png') }}" />
</head>
<body>
   
    <div>
        @include('election_commission.layouts.nav_bar')
    </div>
    
    <div>
        {{-- sidebar section --}}
        @include('election_commission.layouts.side_bar');
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset('election_commission/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('election_commission/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('election_commission/vendors/jquery-circle-progress/js/circle-progress.min.js') }}"></script>
<script src="{{ asset('election_commission/js/jquery.cookie.js') }}" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('election_commission/js/off-canvas.js') }}"></script>
<script src="{{asset('election_commission/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('election_commission/js/misc.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{ asset('election_commission/js/dashboard.js') }}" ></script>
<!-- End custom js for this page -->
</body>
</html>
