<?php

use App\Livewire\Forms\LoginForm;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: RouteServiceProvider::HOME, navigate: true);
    }
}; ?>

<div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form wire:submit="login">
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="form.email" id="email" class="block mt-1 w-full" type="email" name="email" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Kata Sandi')" />

            <x-text-input wire:model="form.password" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="mt-4 flex justify-between items-center">
            <label for="remember" class="inline-flex items-center">
                <input wire:model="form.remember" id="remember" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Ingat Saya') }}</span>
            </label>

            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}" wire:navigate>
                {{ __('Lupa Kata Sandi?') }}
            </a>
            @endif
        </div>

        <div class="flex items-center mt-4">
            <x-primary-button class="w-full text-center flex items-center justify-center gap-3"> <i class="fa-solid fa-right-to-bracket"></i>
                {{ __('Masuk') }}
            </x-primary-button>
        </div>

        <hr class="mt-4">

        <div class="mt-4">
            <a href="/auth/google/redirect" type="button" class="text-white bg-blue-500 hover:bg-blue-500/90 focus:ring-4 focus:outline-none focus:ring-blue-500/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex w-full items-center justify-center dark:focus:ring-blue-500/55 me-2 mb-2">
                <i class="fab fa-google mr-3"></i>
                Masuk dengan Google
            </a>
            <a href="/auth/github/redirect" type="button" class="text-white bg-blue-500 hover:bg-blue-500/90 focus:ring-4 focus:outline-none focus:ring-blue-500/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex w-full items-center justify-center dark:focus:ring-blue-500/55 me-2 mb-2">
                <i class="fab fa-github mr-3"></i>
                Masuk dengan Github
            </a>
        </div>

        <hr class="my-4">

        @if (Route::has('register'))
        <p class="text-sm ms-2 text-gray-600 text-center"> Belum Punya akun?
            <a class="underline text-sm ms-1 text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}" wire:navigate>
                {{ __('Daftar Sekarang') }}
            </a>
        </p>
        @endif
    </form>
</div>