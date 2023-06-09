<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
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
    <link rel="stylesheet" href="{{ URL::asset('css/all.min.css'); }} ">
    <!-- Main Css File  -->
    <link rel="stylesheet" href="{{ URL::asset('layouts_style/navigation.css'); }} ">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet" />
</head>
<!-- Start Header Section  -->

    <div class="header">
        <div class="container">
            
            <div class="logo">
                <!-- <a href="#  ">Electronic Elections</a> -->
                <a href="{{ route('show_dashboard') }}">بوابة الانتخابات</a>
            </div>
            
            <ul class="main-nav">
                <li><a href="{{ route('show_dashboard') }}">الرئسية</a></li>
                <li><a href="#candidates">الانتخابات</a></li>
                <li><a href="#events">اخر الاخبار</a></li>
                <li><a href="#about">من نحن</a></li>
                @guest
                <li>
                    @if (Route::has('register'))
                            <a class="no-underline hover:underline" href="{{ route('register') }}">تسجيل الدخول</a>
                        @endif
                        </li>
                        @else
            <!-- Settings Dropdown -->
            
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2  border border-transparent bg-transparent text-lg leading-4 font-medium rounded-md text-black bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150" >
                            <div>{{ Auth::user()->name }}</div>
                            <div class="ml-1 arrow_down">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
                <i class="fa fa-user" aria-hidden="true"></i>

            </div>

                @endguest
            </ul>
        </div>
    </div>
</html> 
</nav> 
<div>
    @yield('custom_nav')
</div>
    <!-- End Header Section  -->
