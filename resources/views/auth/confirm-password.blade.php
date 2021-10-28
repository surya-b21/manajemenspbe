<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <x-slot name="header">
            <h2 class="font-bold text-3xl">Konfirmasi Password </br> Sistem Manajemen Pengetahuan SPBE</h2>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Silahkan konfirmasi password anda sebelum melanjutkan ke tahap berikutnya') }}
        </div>

        <!-- Validation Errors -->
        {{-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> --}}

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                autocomplete="current-password" />
                                <x-auth-validation-errors name="password" />
            </div>

            <div class="flex justify-end mt-4">
                <x-button>
                    {{ __('Confirm') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
