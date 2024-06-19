<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Data Kriteria') }}
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
                                    <th scope="col" class="px-6 py-3">
                                        Atribut
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Bobot
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kriteria as $alt)
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-4">
                                        {{ $alt->id_kriteria }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $alt->nama_kriteria }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $alt->atribut }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $alt->bobot }}
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