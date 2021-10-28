<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <x-slot name="header">
            <h2 class="font-bold text-3xl text-center">Verifikasi Email </br> Sistem Manajemen Pengetahuan SPBE</h2>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Terima kasih telah mendaftar. Silahkan cek email anda untuk mendapatkan link verifikasi. Jika link verifikasi tidak ditemukan anda bisa klik tombol yang ada dibawah') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('Link verifikasi email terbaru telah dikirim ke email anda') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('Kirim Ulang Link Verifikasi') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
