<x-app-layout>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <form class="p-6 text-gray-900" action="{{ route('kriteria.update', $kriteria->id_kriteria) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
              {{ __('Edit Data Kriteria') }}
            </h2>
            <a href="{{ route('kriteria.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
              <i class="fa-solid fa-arrow-left"></i>
              Kembali
            </a>
          </div>

          <!-- ID -->
          <div>
            <x-input-label for="id" :value="__('ID')" />
            <x-text-input wire:model="form.id" id="id" class="block mt-1 w-full" type="text" name="id" required autofocus autocomplete="id" :value="$kriteria->id_kriteria" />
            <x-input-error :messages="$errors->get('form.id')" class="mt-2" />
          </div>

          <!-- Nama -->
          <div class="mt-5">
            <x-input-label for="nama_kriteria" :value="__('Nama Kriteria')" />
            <x-text-input wire:model="form.nama_kriteria" name="nama_kriteria" class="block mt-1 w-full" type="text" name="nama_kriteria" required autofocus autocomplete="nama_kriteria" :value="$kriteria->nama_kriteria" />
            <x-input-error :messages="$errors->get('form.nama_kriteria')" class="mt-2" />
          </div>

          <!-- Atribut -->
          <div class="mt-5">
            <x-input-label for="atribut" :value="__('Atribut')" />
            <x-text-input wire:model="form.atribut" name="atribut" class="block mt-1 w-full" type="text" name="atribut" required autofocus autocomplete="atribut" :value="$kriteria->atribut" />
            <x-input-error :messages="$errors->get('form.atribut')" class="mt-2" />
          </div>

          <!-- Bobot -->
          <div class="mt-5">
            <x-input-label for="bobot" :value="__('Bobot')" />
            <x-text-input wire:model="form.bobot" name="bobot" class="block mt-1 w-full" type="text" name="bobot" required autofocus autocomplete="bobot" :value="$kriteria->bobot" />
            <x-input-error :messages="$errors->get('form.bobot')" class="mt-2" />
          </div>

          <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-5">
            {{ __('Ubah Data') }}
          </button>
        </form>
      </div>
    </div>
  </div>
</x-app-layout>