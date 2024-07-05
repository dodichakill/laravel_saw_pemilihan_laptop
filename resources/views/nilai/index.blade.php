<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex items-center justify-between">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Data Nilai') }}
                        </h2>

                        <a href="{{route('nilai.create')}}" class="bg-blue-500 hover:text-white hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg flex items-center justify-center">
                            <i class="fa-solid fa-plus me-2"></i>
                            Tambah
                        </a>
                    </div>

                    <!-- table -->
                    <div class="relative overflow-x-auto my-3">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                            <thead class="text-xs text-gray-700 capitalize bg-gray-200">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        id Alt
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        harga
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        skor_prosesor
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        ram
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        penyimpanan
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        ukuran layar
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Daya Baterai
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($nilais as $item)
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-4">
                                        {{ $item->id_alt }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->harga }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->skor_prosesor }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->ram }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->penyimpanan }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->ukuran_layar }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->daya_baterai }}
                                    </td>
                                    <td class="flex items-center flex-wrap gap-2 py-4">
                                        <a href="{{ route('nilai.edit', $item->id) }}" class="text-white inline-block bg-blue-500 rounded-lg hover:bg-blue-700 px-3 py-2"><i class="fa-solid fa-pen-to-square me-1"></i> Edit</a>
                                        <form action="{{ route('nilai.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-white inline-block bg-red-500 rounded-lg hover:bg-red-700 px-3 py-2">
                                                <i class="fa-solid fa-trash me-2"></i>Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                    <!-- table end -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>