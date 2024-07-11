<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 sticky top-0 z-10 w-full">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" wire:navigate>
                        <img src="{{ asset('images/logo.png') }}" class="w-12 h-w-12 drop-shadow" alt="logo">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate><i class="fa-solid fa-house me-2"></i>
                        {{ __('Beranda') }}
                    </x-nav-link>
                    <x-nav-link :href="route('alternatif.index')" :active="request()->routeIs('alternatif.index')" wire:navigate> <i class="fa-solid fa-rectangle-list me-2"></i>
                        {{ __('Alternatif') }}
                    </x-nav-link>
                    <x-nav-link :href="route('kriteria.index')" :active="request()->routeIs('kriteria.index')" wire:navigate> <i class="fa-solid fa-clipboard-check me-2"></i>
                        {{ __('Kriteria') }}
                    </x-nav-link>
                    <x-nav-link :href="route('nilai.index')" :active="request()->routeIs('nilai.index')" wire:navigate> <i class="fa-solid fa-clipboard-list me-2"></i>
                        {{ __('Nilai') }}
                    </x-nav-link>
                    <x-nav-link :href="route('hitung.index')" :active="request()->routeIs('hitung.index')" wire:navigate><i class="fa-solid fa-calculator me-2"></i>
                        {{ __('Hitung SAW') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex items-center gap-3">
                <x-nav-link :href="route('profile')" wire:navigate class="text-blue-600 bg-blue-200 rounded-lg flex items-center justify-center  hover:border-none hover:text-blue-800"><i class="fa-solid text-xl fa-user block"></i></x-nav-link>
                <button wire:click="logout" class="w-full text-start hover:scale-95 text-red-700 px-3 py-2 bg-red-300 rounded-lg">
                    <div class="fa fa-sign-out me-2"></div>Logout
                </button>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate> <i class="fa-solid fa-house me-2"></i>
                {{ __('Beranda') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('alternatif.index')" :active="request()->routeIs('alternatif.index')" wire:navigate> <i class="fa-solid fa-rectangle-list me-2"></i>
                {{ __('Alternatif') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('kriteria.index')" :active="request()->routeIs('kriteria.index')" wire:navigate> <i class="fa-solid fa-clipboard-check me-2"></i>
                {{ __('Kriteria') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('nilai.index')" :active="request()->routeIs('nilai.index')" wire:navigate> <i class="fa-solid fa-clipboard-list me-2"></i>
                {{ __('Nilai') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('hitung.index')" :active="request()->routeIs('hitung.index')" wire:navigate> <i class="fa-solid fa-calculator me-2"></i>
                {{ __('Hitung SAW') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800" x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>
                <div class="font-medium text-sm text-gray-500">{{ auth()->user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile')" wire:navigate> <i class="fa-solid fa-user me-2"></i>
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <button wire:click="logout" class="w-full text-start">
                    <x-responsive-nav-link> <i class="fa-solid fa-right-from-bracket me-2"></i>
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </button>
            </div>
        </div>
    </div>
</nav>