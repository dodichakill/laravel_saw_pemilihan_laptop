<x-app-layout>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
          <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
              {{ __('Buat Data Alternatif') }}
            </h2>
            <a href="{{ route('alternatif.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
              <i class="fa-solid fa-arrow-left"></i>
              Back
            </a>
          </div>

          <!-- ID -->
          <div>
            <x-input-label for="id" :value="__('ID')" />
            <x-text-input wire:model="form.id" id="id" class="block mt-1 w-full" type="text" name="id" required autofocus autocomplete="id" />
            <x-input-error :messages="$errors->get('form.id')" class="mt-2" />
          </div>

          <!-- Nama -->
          <div class="mt-5">
            <x-input-label for="nama_alternatif" :value="__('Nama Alternatif')" />
            <x-text-input wire:model="form.nama_alternatif" name="nama_alternatif" class="block mt-1 w-full" type="text" name="nama_alternatif" required autofocus autocomplete="nama_alternatif" />
            <x-input-error :messages="$errors->get('form.nama_alternatif')" class="mt-2" />
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>