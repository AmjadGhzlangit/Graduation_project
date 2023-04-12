
<section class="">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('ID Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6 space-x-6 grid grid-cols-3 gap-6 container">
        @csrf
        @method('patch')
        {{-- Pleace of Registion  --}}
        <div>
            <x-input-label for="pleace_registion" :value="__('Pleace Registion')" />
            <x-text-input id="pleace_registion" name="pleace_registion" type="text" class="mt-1 block w-full" :value="old('pleace_registion', $user->id_number)" required autofocus autocomplete="pleace_registion" />
            <x-input-error class="mt-2" :messages="$errors->get('pleace_registion')" />
        </div>

        {{-- Number of Registion  --}}
        <div>
            <x-input-label for="number_registion" :value="__('Number Registion')" />
            <x-text-input id="number_registion" name="number_registion" type="text" class="mt-1 block w-full" :value="old('number_registion', $user->name)" required autofocus autocomplete="number_registion" />
            <x-input-error class="mt-2" :messages="$errors->get('number_registion')" />
        </div>

        {{-- ٍStart governorate  Registion  --}}
        {{-- المحافظة التي يتبع لها القيد --}}
        {{-- note:not complate  --}}
        <div>
    <x-input-label for="governorate_registration" :value="__('المحافظة التي يتبع لها القيد')" />
    <select id="governorate_registration" name="governorate_registration" class="mt-1 block w-full rounded-lg py-2">
        <option value="" disabled selected>Choose Governorate</option>
        <option value="Aleppo">Aleppo</option>
        <option value="Damascus">Damascus</option>
        <option value="Daraa">Daraa</option>
        <option value="Deir ez-Zor">Deir ez-Zor</option>
        <option value="Hama">Hama</option>
        <option value="Homs">Homs</option>
        <option value="Idlib">Idlib</option>
        <option value="Latakia">Latakia</option>
        <option value="Quneitra">Quneitra</option>
        <option value="Raqqa">Raqqa</option>
        <option value="As-Suwayda">As-Suwayda</option>
        <option value="Tartus">Tartus</option>
    </select>
        </div>
        {{-- End Gender  --}}


        {{-- Start The secretariat of the registration number--}}
        {{-- الامانة التي يتبع لها رقم القيد --}}
        {{-- note:not complate  --}}
        <div>
            <x-input-label for="secretariat" :value="__('الامانة')" />
            <x-text-input id="secretariat" name="secretariat" type="text" class="mt-1 block w-full" :value="old('secretariat', $user->name)" required autofocus autocomplete="secretariat" />
            <x-input-error class="mt-2" :messages="$errors->get('secretariat')" />
        </div>
        {{-- End The secretariat of the registration number  --}}

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
