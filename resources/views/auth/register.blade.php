<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
{{-- main Css file  --}}
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link href="{{ URL::asset('css/registration_from.css'); }} " rel="stylesheet" type="text/css">
{{--  This will include the compiled CSS file in your HTML file --}}
{{-- the bootstrap file  --}}
<link rel="stylesheet" href="{{ mix('css/app.css') }}">

<title>Sign in & Sign up Form</title>
</head>

<body>
<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h2 class="title">Sign up</h2>
            <!-- Name -->
            <div class="input-field">
            <i class="fas fa-user"></i>
            <x-text-input
                id="name"
                type="text"
                name="name"
                placeholder="Name"
                :value="old('name')"
                {{-- required --}}
                autofocus
                autocomplete="name"
            />
            @if ($errors->has('name'))
            <p class="error_message">{{ $errors->first('name') }}</p>
            @endif
            </div>
            <!-- Email Address -->
            <div class="input-field">
            <i class="fas fa-envelope"></i>
            <x-text-input
                id="email"
                type="email"
                name="email"
                placeholder="Email"
                :value="old('email')"
                {{-- required --}}
                autocomplete="username"
            />
            @if ($errors->has('email'))
            <p class="error_message">{{ $errors->first('email') }}</p>
            @endif
            </div>
            <!-- ID Number -->
            <div class="input-field">
            <i class="fas fa-id-card"></i>
            <x-text-input
                id="id_number"
                type="text"
                class="form-control is-valid"
                name="id_number"
                placeholder="ID number"
                :value="old('id_number')"
                {{-- required  --}}
            />
            @if ($errors->has('id_number'))
            <p class="error_message">{{ $errors->first('id_number') }}</p>
            {{-- With this code, the error message will be hidden as soon as the user starts typing in the input field. --}}
            <script>
            const inputField = document.querySelector('#id_number');
            inputField.addEventListener('input', function() {
            const errorMessage = document.querySelector('.error_message');
            errorMessage.style.display = 'none';
            });
                </script>
            @endif
            
            </div>
            <!-- Phone Number -->
            <div class="input-field">
            <i class="fas fa-phone-alt"></i>
            <x-text-input
                id="phone_number"
                type="string"
                name="phone_number"
                placeholder="Phone Number"
                :value="old('phone_number')"
                {{-- required --}}
            />
            @if ($errors->has('phone_number'))
            <p class="error_message">{{ $errors->first('phone_number') }}</p>
            @endif
            </div>

            <!-- Password -->
            <div class="input-field">
            <i class="fas fa-lock"></i>
            <x-text-input
                id="password"
                type="password"
                name="password"
                placeholder="password"
                {{-- required --}}
                autocomplete="new-password"
            />
            @if ($errors->has('password'))
            <p class="error_message">{{ $errors->first('password') }}</p>
            @endif
            </div>

                <!-- Confirm Password -->
            <div class="input-field">
                <i class="fas fa-lock"></i>
            <x-text-input
                id="password_confirmation"
                type="password"
                name="password_confirmation"
                placeholder="ConfirmPassword"
                {{-- required --}}
                autocomplete="new-password" />
                @if ($errors->has('password_confirmation'))
            <p class="error_message">{{ $errors->first('password_confirmation') }}</p>
            @endif
        </div>  
                <button type="submit" class="btn">
                <a>{{ __('Register') }}</a>
                </button>
                
            </form>
            
        </div>
    </div>

    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>One of us?</h3>
                <p>
                    If you have already signed up , that's great !!
                    Please LOGIN
                </p>
                <a href="{{ route('login') }}"><button class="btn transparent" id="sign-up-btn">
                        Login
                    </button>
                </a>
            </div>
            <img src="images/home_page.png" class="image" alt="" />
        </div>
    </div>

</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
