<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <x-slot name="header">
            <h2 class="font-bold text-3xl">Registrasi Sistem Manajemen Pengetahuan SPBE</h2>
        </x-slot>

        {{-- <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" /> --}}

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nama Lengkap')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" autofocus />
                <x-auth-validation-errors name="name" />
            </div>

            <!-- Username -->
            <div>
                <x-label for="username" :value="__('Username')" />

                <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" autofocus />
                <x-auth-validation-errors name="username" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" />
                <x-auth-validation-errors name="email" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                             autocomplete="new-password" />
                <x-auth-validation-errors name="password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" />
                <x-auth-validation-errors name="password_confirmation" />
            </div>

             <!-- Alamat -->
             <div class="mt-4">
                <x-label for="alamat" :value="__('Alamat')" />

                <x-textarea id="alamat" class="block mt-1 w-full" type="textarea" name="alamat" :value="old('alamat')"></x-textarea>
                <x-auth-validation-errors name="alamat" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
