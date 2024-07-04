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
              <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>--- Pilih ID ALternatif ---</option>
                <option value="US">United States</option>
                <option value="CA">Canada</option>
                <option value="FR">France</option>
                <option value="DE">Germany</option>
              </select>
            </form>


            <!-- Nama -->
            <div class="mt-5">
              <x-input-label for="nama_nilai" :value="__('Nama')" />
              <x-text-input wire:model="form.nama_nilai" name="nama_nilai" class="block mt-1 w-full" type="text" name="nama_nilai" required autofocus autocomplete="nama_nilai" />
              <x-input-error :messages="$errors->get('form.nama_nilai')" class="mt-2" />
            </div>

            <!-- Harga -->
            <div class="mt-5">
              <x-input-label for="harga" :value="__('Harga')" />
              <x-text-input wire:model="form.harga" name="harga" class="block mt-1 w-full" type="text" name="harga" required autofocus autocomplete="harga" />
              <x-input-error :messages="$errors->get('form.harga')" class="mt-2" />
            </div>

            <!-- Prosesor -->
            <div class="mt-5">
              <x-input-label for="score_prosesor" :value="__('Nama')" />
              <x-text-input wire:model="form.score_prosesor" name="score_prosesor" class="block mt-1 w-full" type="text" name="score_prosesor" required autofocus autocomplete="score_prosesor" />
              <x-input-error :messages="$errors->get('form.score_prosesor')" class="mt-2" />
            </div>

            <!-- RAM -->
            <div class="mt-5">
              <x-input-label for="RAM" :value="__('RAM')" />
              <x-text-input wire:model="form.RAM" name="RAM" class="block mt-1 w-full" type="text" name="RAM" required autofocus autocomplete="RAM" />
              <x-input-error :messages="$errors->get('form.RAM')" class="mt-2" />
            </div>

            <!-- Penyimpanan -->
            <div class="mt-5">
              <x-input-label for="penyimpanan" :value="__('Penyimpanan')" />
              <x-text-input wire:model="form.penyimpanan" name="penyimpanan" class="block mt-1 w-full" type="text" name="penyimpanan" required autofocus autocomplete="penyimpanan" />
              <x-input-error :messages="$errors->get('form.penyimpanan')" class="mt-2" />
            </div>

            <!-- Layar -->
            <div class="mt-5">
              <x-input-label for="ukuran_layar" :value="__('Ukuran Layar')" />
              <x-text-input wire:model="form.ukuran_layar" name="ukuran_layar" class="block mt-1 w-full" type="text" name="ukuran_layar" required autofocus autocomplete="ukuran_layar" />
              <x-input-error :messages="$errors->get('form.ukuran_layar')" class="mt-2" />
            </div>
            <!-- Baterai -->

            <div class="mt-5">
              <x-input-label for="baterai" :value="__('Baterai')" />
              <x-text-input wire:model="form.baterai" name="baterai" class="block mt-1 w-full" type="text" name="baterai" required autofocus autocomplete="baterai" />
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