<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Perhitungan SAW') }}
                    </h2>
                    <hr class="my-3">

                    <h3 class="font-medium text-base text-gray-600 mt-7 leading-tight">
                        {{ __('Data Nilai') }}
                    </h3>
                    <!-- table perhitungan -->
                    <div class="relative overflow-x-auto my-3">
                        <table class="w-full text-sm text-center rtl:text-right text-gray-500">
                            <thead class="text-xs text-gray-700 capitalize bg-gray-200">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Alternatif
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        nama
                                    </th>
                                    @foreach ($kriterias as $krt)
                                    <th scope="col" class="px-6 py-3">
                                        {{ $krt->nama_kriteria }} <br />({{ $krt->atribut }}: {{ $krt->bobot }})
                                    </th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody class="text-center">
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
                            <tfoot class="text-center">
                                <tr class="my-2 border-b">
                                    <td colspan="2" class="px-3 py-2 bg-gray-200 my-3 border-b border-white">Min</td>
                                    @foreach ($minmax as $key => $val)
                                    <td class="bg-gray-100">{{ $val['min'] }}</td>
                                    @endforeach
                                </tr>
                                <tr class="border-b">
                                    <td colspan="2" class="px-3 py-2 bg-gray-200 my-3">Max</td>
                                    @foreach ($minmax as $key => $val)
                                    <td class="bg-gray-100">{{ $val['max'] }}</td>
                                    @endforeach
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- table perhitungan end -->

                    <h3 class="font-medium text-base text-gray-600 leading-tight mt-7">
                        {{ __('Normalisasi') }}
                    </h3>
                    <!-- table normalisasi -->
                    <div class="relative overflow-x-auto my-3">
                        <table class="w-full text-sm text-center rtl:text-right text-gray-500">
                            <thead class="text-xs text-gray-700 capitalize bg-gray-200">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Alternatif
                                    </th>
                                    @foreach ($kriterias as $krt)
                                    <th scope="col" class="px-6 py-3">
                                        {{ $krt->id_kriteria}}
                                    </th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($normal as $key => $values)
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-4">
                                        {{ $key }}
                                    </td>
                                    @foreach ($values as $k => $v)
                                    <td class="px-6 py-4">
                                        {{ round($v, 4) }}
                                    </td>
                                    @endforeach
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- table normalisasi end -->

                    <h3 class="font-medium text-base text-gray-600 leading-tight mt-7">
                        {{ __('Terbobot') }}
                    </h3>
                    <!-- table terbobot -->
                    <div class="relative overflow-x-auto my-3">
                        <table class="w-full text-sm text-center rtl:text-right text-gray-500">
                            <thead class="text-xs text-gray-700 capitalize bg-gray-200">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Alternatif
                                    </th>
                                    @foreach ($kriterias as $krt)
                                    <th scope="col" class="px-6 py-3">
                                        {{ $krt->id_kriteria}}
                                    </th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($terbobot as $key => $values)
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-4">
                                        {{ $key }}
                                    </td>
                                    @foreach ($values as $k => $v)
                                    <td class="px-6 py-4">
                                        {{ round($v, 4) }}
                                    </td>
                                    @endforeach
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- table terbobot end -->

                    <h3 class="font-medium text-base text-gray-600 leading-tight mt-7">
                        {{ __('Perangkingan') }}
                    </h3>
                    <!-- table perangkingan -->
                    <div class="relative overflow-x-auto my-3">
                        <table class="w-full text-sm text-center rtl:text-right text-gray-500">
                            <thead class="text-xs text-gray-700 capitalize bg-gray-200">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Rank
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Alternatif
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nama
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Total
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($rank as $key => $value)
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-4">
                                        {{ $value }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $key }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $alternatifs[$key]->nama_alternatif }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ round($total[$key], 4) }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- table perangkingan end -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>