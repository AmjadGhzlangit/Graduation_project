@include('layouts.nav')
<section class="">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

   <a href="{{ route('form_one') }}" class="btn btn-primary">Create Candidacy Application</a>


    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6 space-x-6 grid grid-cols-3 gap-6 container">
        @csrf
        @method('PUT')
        {{-- id number  --}}
        <div>
            <x-input-label for="id_number" :value="__('Nation_Id_number')" />
            <x-text-input id="id_number" name="id_number" type="text" class="mt-1 block w-full" :value="old('id_number', $user->id_number)" required readonly  autofocus autocomplete="id_number" />
            <x-input-error class="mt-2" :messages="$errors->get('id_number')" />
        </div>
        {{-- First Name  --}}

        <div>
            <x-input-label for="name" :value="__('First_Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>
        {{-- last Name  --}}
        {{-- note:not complate  --}}
        <div>
            <x-input-label for="last_name" :value="__('Last_Name')" />
            <x-text-input id="last_name" name="last_name" type="text" class="mt-1 block w-full" :value="old('last_name', $user->last_name)" required autofocus autocomplete="last_name" />
            <x-input-error class="mt-2" :messages="$errors->get('last_name')" />
        </div>
        {{-- End last Name  --}}


        {{-- Start Father Name  --}}
        {{-- note:not complate  --}}
        <div>
            <x-input-label for="father_name" :value="__('Father_Name')" />
            <x-text-input id="father_name" name="father_name" type="text" class="mt-1 block w-full" :value="old('father_name', $user->father_name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('father_name')" />
        </div>
        {{-- End Father Name  --}}

        {{-- Start Mother Name  --}}
        {{-- note:not complate  --}}
        <div>
            <x-input-label for="mother_name" :value="__('Mother_Name')" />
            <x-text-input id="mother_name" name="mother_name" type="text" class="mt-1 block w-full" :value="old('mother_name', $user->mother_name)" required autofocus autocomplete="mother_Name" />
            <x-input-error class="mt-2" :messages="$errors->get('mother_name')" />
        </div>
        {{-- End Mother Name  --}}

        {{-- Start Birth Day  --}}
        <div>
            <x-input-label for="birthday" :value="__('Birth Day')" />
            <x-text-input id="birthday" name="birthday" type="date" class="mt-1 block w-full" :value="old('birthday', $user->birthday)" required autofocus autocomplete="mother_Name" />
            <x-input-error class="mt-2" :messages="$errors->get('birthday')" />
        </div>
        {{-- End Birth Day  --}}


        {{-- Start Gender  --}}
        <div>
            <x-input-label for="gender" :value="__('Gender')" />
            <select id="gender" name="gender" class="mt-1 block w-full rounded-lg py-2 ">
            <option selected>Choose Gender</option>
            <option value="famel">Famel</option>
            <option value="male">Male</option>
            </select>
        </div>
        {{-- End Gender  --}}


        {{-- Start Email  --}}
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>
        {{-- End Email  --}}

        {{-- Phone Number  --}}
        <div>
            <x-input-label for="phone_number" :value="__('Phone Number')" />
            <x-text-input id="phone_number" name="phone_number" type="text" class="mt-1 block w-full" :value="old('phone_number', $user->phone_number)" required autofocus readonly autocomplete="phone_number" />
            <x-input-error class="mt-2" :messages="$errors->get('phone_number')" />
        </div>
        {{--End Phone Number  --}}

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
            {{-- x-init is an Alpine.js directive that allows you to execute JavaScript code when an element is initialized.
                The directive takes a string as its value,
                which is evaluated as JavaScript code when the element is initialized. --}}
        </div>
    </form>
</section>
