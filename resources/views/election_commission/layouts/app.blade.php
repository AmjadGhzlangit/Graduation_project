<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Election_Commission</title>
    {{-- includ css code  --}}
    @include('election_commission.css.app_css')
</head>
<body>
    <div>
    @include('election_commission.layouts.nav_bar')
    <div class="container-fluid page-body-wrapper">
    @include('election_commission.layouts.sidebar');
    
    @yield('content')
    </div>
    {{-- include js flie --}}
    @include('election_commission.layouts.js')
    </div>
</body>
</html>
