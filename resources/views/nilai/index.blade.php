<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Data Nilai') }}
                    </h2>

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