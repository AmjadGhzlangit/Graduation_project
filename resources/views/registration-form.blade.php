<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
<link href="css/registration_from.css" rel="stylesheet" type="text/css">
<title>Sign in & Sign up Form</title>
</head>

<body>
<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <form method="post" action="register">
                <h2 class="title">Sign up</h2>
                <p>
                    <!-- <%=(typeof alertMsg!='undefined' )? alertMsg:''%> -->
                </p>
                <!-- Name -->
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Name" name="first_name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input id="email" type="email" placeholder="Email" name="email_address" :value="old('email')" required autocomplete="username"  />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password"
                            name="password"
                            placeholder="password"
                            required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input id="password_confirmation"
                            type="password" 
                            placeholder="ConfirmPassword" 
                            name="password_confirmation" 
                            required autocomplete="new-password" />
                </div>
                <input type="submit" class="btn" value="Sign up" />


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
            <img src="img/home_page.png" class="image" alt="" />
        </div>
    </div>

</div>

<script></script>
</body>

</html>