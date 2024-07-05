<x-app-layout>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <form class="p-6 text-gray-900" action="{{ route('nilai.update', $alt->id) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
              Edit Data nilai : {{ $alt->id_alt }}
            </h2>
            <a href="{{ route('nilai.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
              <i class="fa-solid fa-arrow-left"></i>
              Kembali
            </a>
          </div>

          <div>
            <input type="hidden" name="id" value="{{ $alt->id }}">
            <input type="hidden" name="id_alt" value="{{ $alt->id_alt }}">

            <!-- Harga -->
            <div class="mt-5">
              <x-input-label for="harga" :value="__('Harga')" />
              <x-text-input wire:model="form.harga" class="block mt-1 w-full" type="number" name="harga" required autofocus autocomplete="harga" :value="$alt->harga" />
              <x-input-error :messages="$errors->get('form.harga')" class="mt-2" />
            </div>

            <!-- Prosesor -->
            <div class="mt-5">
              <x-input-label for="skor_prosesor" :value="__('Skor Prosesor')" />
              <x-text-input wire:model="form.skor_prosesor" name="skor_prosesor" class="block mt-1 w-full" type="number" name="skor_prosesor" required autofocus autocomplete="skor_prosesor" :value="$alt->skor_prosesor" />
              <x-input-error :messages="$errors->get('form.skor_prosesor')" class="mt-2" />
            </div>

            <!-- RAM -->
            <div class="mt-5">
              <x-input-label for="RAM" :value="__('RAM')" />
              <x-text-input wire:model="form.ram" name="ram" class="block mt-1 w-full" type="number" required autofocus autocomplete="ram" :value="$alt->ram" />
              <x-input-error :messages="$errors->get('form.ram')" class="mt-2" />
            </div>

            <!-- Penyimpanan -->
            <div class="mt-5">
              <x-input-label for="penyimpanan" :value="__('Penyimpanan')" />
              <x-text-input wire:model="form.penyimpanan" name="penyimpanan" class="block mt-1 w-full" type="number" required autofocus autocomplete="penyimpanan" :value="$alt->penyimpanan" />
              <x-input-error :messages="$errors->get('form.penyimpanan')" class="mt-2" />
            </div>

            <!-- Layar -->
            <div class="mt-5">
              <x-input-label for="ukuran_layar" :value="__('Ukuran Layar')" />
              <x-text-input wire:model="form.ukuran_layar" name="ukuran_layar" class="block mt-1 w-full" type="number" required autofocus autocomplete="ukuran_layar" :value="$alt->ukuran_layar" />
              <x-input-error :messages="$errors->get('form.ukuran_layar')" class="mt-2" />
            </div>
            <!-- Baterai -->

            <div class="mt-5">
              <x-input-label for="baterai" :value="__('Daya Baterai')" />
              <x-text-input wire:model="form.baterai" name="baterai" class="block mt-1 w-full" type="number" name="baterai" required autofocus autocomplete="baterai" :value="$alt->daya_baterai" />
              <x-input-error :messages="$errors->get('form.baterai')" class="mt-2" />
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-5">
              {{ __('Simpan') }}
            </button>
          </div>

        </form>
      </div>
    </div>
  </div>
</x-app-layout>