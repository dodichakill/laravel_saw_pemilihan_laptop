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
                                        id
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        nama
                                    </th>
                                    @foreach ($kriterias as $krt)
                                    <th scope="col" class="px-6 py-3">
                                        {{ $krt->nama_kriteria }}
                                    </th>
                                    @endforeach
                                    <th scope="col" class="px-6 py-3">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($nilais as $key => $values)
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-4">
                                        {{ $key }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $alternatifs[$key]->nama_alternatif }}
                                    </td>
                                    @foreach ($values as $k => $v)
                                    <td class="px-6 py-4">
                                        {{ $v }}
                                    </td>
                                    @endforeach
                                    <td class="flex items-center flex-wrap gap-2 py-4">
                                        <a href="{{ route('nilai.edit', $key) }}" class="text-white inline-block bg-blue-500 rounded-lg hover:bg-blue-700 px-3 py-2"><i class="fa-solid fa-pen-to-square me-1"></i> Edit</a>
                                        <form action="{{ route('nilai.destroy', $key) }}" method="post">
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