<x-app-layout>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <form class="p-6 text-gray-900" action="{{ route('nilai.store') }}" method="POST">
          @csrf
          @method('POST')
          <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
              {{ __('Buat Data nilai') }}
            </h2>
            <a href="{{ route('nilai.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
              <i class="fa-solid fa-arrow-left"></i>
              Kembali
            </a>
          </div>

          <!-- ID -->
          <div>
            <form class="max-w-sm mx-auto">
              <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Alternatif</label>
              <select id="id_alt" name="id_alt" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>--- Pilih ID Alternatif ---</option>
                @foreach ($alts as $alt)
                <option value="{{ $alt->id_alternatif }}">{{ $alt->id_alternatif }}</option>
                @endforeach
              </select>
            </form>

            <!-- Harga -->
            <div class="mt-5">
              <x-input-label for="harga" :value="__('Harga')" />
              <x-text-input wire:model="form.harga" name="harga" class="block mt-1 w-full" type="number" name="harga" required autofocus autocomplete="harga" />
              <x-input-error :messages="$errors->get('form.harga')" class="mt-2" />
            </div>

            <!-- Prosesor -->
            <div class="mt-5">
              <x-input-label for="skor_prosesor" :value="__('Skor Prosesor')" />
              <x-text-input wire:model="form.skor_prosesor" name="skor_prosesor" class="block mt-1 w-full" type="number" name="skor_prosesor" required autofocus autocomplete="skor_prosesor" />
              <x-input-error :messages="$errors->get('form.skor_prosesor')" class="mt-2" />
            </div>

            <!-- RAM -->
            <div class="mt-5">
              <x-input-label for="RAM" :value="__('RAM')" />
              <x-text-input wire:model="form.RAM" name="ram" class="block mt-1 w-full" type="number" required autofocus autocomplete="ram" />
              <x-input-error :messages="$errors->get('form.ram')" class="mt-2" />
            </div>

            <!-- Penyimpanan -->
            <div class="mt-5">
              <x-input-label for="penyimpanan" :value="__('Penyimpanan')" />
              <x-text-input wire:model="form.penyimpanan" name="penyimpanan" class="block mt-1 w-full" type="number" required autofocus autocomplete="penyimpanan" />
              <x-input-error :messages="$errors->get('form.penyimpanan')" class="mt-2" />
            </div>

            <!-- Layar -->
            <div class="mt-5">
              <x-input-label for="ukuran_layar" :value="__('Ukuran Layar')" />
              <x-text-input wire:model="form.ukuran_layar" name="ukuran_layar" class="block mt-1 w-full" type="number" required autofocus autocomplete="ukuran_layar" />
              <x-input-error :messages="$errors->get('form.ukuran_layar')" class="mt-2" />
            </div>
            <!-- Baterai -->

            <div class="mt-5">
              <x-input-label for="baterai" :value="__('Daya Baterai')" />
              <x-text-input wire:model="form.baterai" name="baterai" class="block mt-1 w-full" type="number" name="baterai" required autofocus autocomplete="baterai" />
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