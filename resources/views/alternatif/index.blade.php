<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex items-center justify-between">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Data Alternatif') }}
                        </h2>

                        <a href="{{ route('alternatif.create') }}" class="bg-blue-500 hover:text-white hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg flex items-center justify-center">
                            <i class="fa-solid fa-plus me-2"></i>
                            Tambah
                        </a>
                    </div>

                    <!-- table -->
                    <div class="relative overflow-x-auto my-3">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                            <thead class="text-xs text-gray-700 capitalize
                             bg-gray-200">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        id
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        nama
                                    </th scope="col" class="px-6 py-3">
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alternatif as $alt)
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-4">
                                        {{ $alt->id_alternatif }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $alt->nama_alternatif }}
                                    </td>
                                    <td class="flex items-center flex-wrap gap-2 py-4">
                                        <a href="{{ route('alternatif.edit', $alt->id_alternatif) }}" class="text-white inline-block bg-blue-500 rounded-lg hover:bg-blue-700 px-3 py-2"><i class="fa-solid fa-pen-to-square me-1"></i>Edit</a>
                                        <form onsubmit="return confirm('Apakah anda yakin?')" action="{{ route('alternatif.destroy', $alt->id_alternatif) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-white inline-block bg-red-500 rounded-lg hover:bg-red-700 px-3 py-2">
                                                <i class="fa-solid fa-trash me-2"></i>Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                @if($alternatif->count() == 0)
                                <tr class="bg-white border-b text-center">
                                    <td colspan="3" class="px-6 py-4">
                                        Belum ada data yang tersedia!
                                    </td>
                                </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
                    <!-- table end -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>