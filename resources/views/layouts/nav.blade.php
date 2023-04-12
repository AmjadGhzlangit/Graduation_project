@section('custom_nav')
<style>
    .navbar{
    position: relative;
    width:30%;
    font-size: 1.125rem/* 18px */;
    font-weight: 500;
    background-color: white;
    
    }
    @media (max-width:767px) {
.navbar  {
    width: 100%;
}}
    .navbar ul  {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        align-items: center;
        margin-top: 20px;
        max-width: 100%;
        
    }
    .navbar ul  > li
    {
    padding: 0 10px;
    border-right: 2px solid #777;
    border-left: 2px solid #777;
    }
    .navbar ul  > li > a{
        display: flex;
        position: relative;
        justify-content: center;
        padding-top: 15px;
        padding-bottom: 15px;
        overflow: hidden;
        transition: var(--main-transition);
    }
    @media (max-width:767px) {
    .navbar ul > li > a {
    padding: 10px;
    font-size: 14px;
    height: 40px;
    width: 100%;
    }}
    .navbar ul  > li > a::before {
    content: '';
    position: absolute;
    top: 0px;
    left: -100%;
    height: 4px;
    width: 100%;
    background-color: #777;
    transition: var(--main-transition);
    }
    .navbar ul > li > a:hover
    {
    color: var(--main-colorx);
    background-color: #fafafa;
    }
    .navbar ul > li > a:hover::before {
    left: 0;
    }
</style>
    <nav class="navbar container">
<ul >
    <li><a href="{{ route('dashboard') }}">Presonal Information</a></li>
    <li><a href="../update_password">Edit Password</a></li>
    <li><a href="#">Edit Phone</a></li>
</ul>

</nav>
<hr class=" bg-gray-700 h-px container">
@endsection
