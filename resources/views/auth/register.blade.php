<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label for="middle_name" value="{{ __('Middle name') }}" />
                <x-jet-input id="middle_name" class="block mt-1 w-full" type="text" name="middle_name" :value="old('middle_name')" required autofocus autocomplete="middle_name" />
            </div>

            <div>
                <x-jet-label for="last_name" value="{{ __('Last name') }}" />
                <x-jet-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="last_name" />
            </div>

            <div>
                <x-jet-label for="gender" value="{{ __('Gender') }}" />
                <select name="gender" class="form-input rounded-md shadow-sm block mt-1 w-full" required autocomplete="gender" >
                    <option value="">Select one option</option>
                    <option value="male" {{old('gender') == 'male'?'selected':''}} >Male</option>
                    <option value="female" {{old('gender') == 'female'?'selected':''}}>Female</option>
                </select>
            </div>

            <div>
                <x-jet-label for="marital_status" value="{{ __('Marital status') }}" />
                <livewire:marital-status-select :status="old('marital_status')"/>
            </div>

            <div>
                <x-jet-label for="interest_level" value="{{ __('Interest Level') }}" />
                <livewire:interest-level-select :interest_level="old('interest_level')"/>
            </div>

            <div>
                <x-jet-label for="age" value="{{ __('Age') }}" />
                <x-jet-input id="age" class="block mt-1 w-full" type="number" name="age" :value="old('age')" required autofocus autocomplete="age" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>