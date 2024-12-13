<x-guest-layout>
    @slot('title', 'Register')
    <form method="POST" action="{{ route('register') }}">
        @csrf

        {{-- <x-input-error :type="'danger'" /> --}}

        <div class="mb-3">
            <x-input-label for="email" :value="'Email'" class="fw-bold"/>
            <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-error-message :message="$errors->first('email')" />
            </div>
            
            <div class="mb-3">
                <x-input-label for="password" :value="'Password'" class="fw-bold"/>
                <x-text-input id="password" type="password" name="password" required autocomplete="new-password" />
                <x-error-message :message="$errors->first('password')" />
        </div>

        <div class="mb-3">
            <x-input-label for="password_confirmation" :value="'Confirm Password'" class="fw-bold"/>
            <x-text-input id="password_confirmation" type="password" name="password_confirmation" required
                autocomplete="new-password" />
        </div>

        <div class="d-flex justify-content-end mt-3 align-items-center">
            <a href="{{ route('login') }}">
                Already registered?
            </a>

            <x-primary-button class="ms-4">
                Register
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
