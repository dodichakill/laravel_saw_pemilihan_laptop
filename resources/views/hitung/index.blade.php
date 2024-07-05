<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Perhitungan SAW') }}
                    </h2>
                    <hr class="my-3">

                    <h3 class="font-medium text-base text-gray-600 leading-tight mt-7">
                        {{ __('Data Nilai') }}
                    </h3>
                    <!-- table nilai -->
                    <div class="relative overflow-x-auto my-3">
                        <table class="w-full text-sm text-center rtl:text-right text-gray-500">
                            <thead class="text-xs text-gray-700 capitalize bg-gray-200">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Id Alternatif
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Harga <br /> <span class="text-xs text-slate-400">
                                            (Cost, Bobot: 0.3)
                                        </span>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Skor Prosesor <br /> <span class="text-xs text-slate-400">
                                            (Benefit, Bobot: 0.15)
                                        </span>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        RAM <br /> <span class="text-xs text-slate-400">
                                            (Benefit, Bobot: 0.2)
                                        </span>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Penyimpanan <br /> <span class="text-xs text-slate-400">
                                            (Benefit, Bobot: 0.15)
                                        </span>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Ukuran Layar <br /> <span class="text-xs text-slate-400">
                                            (Benefit, Bobot: 0.1)
                                        </span>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Daya Baterai <br /> <span class="text-xs text-slate-400">
                                            (Benefit, Bobot: 0.1)
                                        </span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
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
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot class="text-center">
                                <tr class="my-2 border-b">
                                    <td class="px-3 py-2 bg-gray-200 my-3 border-b border-white">Min / Max</td>
                                    @foreach ($minmax as $key => $val)
                                    <td class="bg-gray-100">{{ $val['min'] }}</td>
                                    @endforeach
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- table nilai end -->

                    <h3 class="font-medium text-base text-gray-600 leading-tight mt-7">
                        {{ __('Data Normalisasi') }}
                    </h3>
                    <!-- table normalisasi -->
                    <div class="relative overflow-x-auto my-3">
                        <table class="w-full text-sm text-center rtl:text-right text-gray-500">
                            <thead class="text-xs text-gray-700 capitalize bg-gray-200">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Id Alternatif
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Harga
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Skor Prosesor
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        RAM
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Penyimpanan
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Ukuran Layar
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Daya Baterai
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($normalisasi as $items)
                                <tr class="bg-white border-b">
                                    @foreach ($items as $item)
                                    <td class="px-6 py-4">
                                        {{ $item }}
                                    </td>
                                    @endforeach
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- table normalisasi end -->

                    <h3 class="font-medium text-base text-gray-600 leading-tight mt-7">
                        {{ __('Data Terbobot') }}
                    </h3>
                    <!-- table Terbobot -->
                    <div class="relative overflow-x-auto my-3">
                        <table class="w-full text-sm text-center rtl:text-right text-gray-500">
                            <thead class="text-xs text-gray-700 capitalize bg-gray-200">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Id Alternatif
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Harga
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Skor Prosesor
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        RAM
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Penyimpanan
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Ukuran Layar
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Daya Baterai
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($terbobot as $items)
                                <tr class="bg-white border-b">
                                    @foreach ($items as $item)
                                    <td class="px-6 py-4">
                                        {{ $item }}
                                    </td>
                                    @endforeach
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- table Terbobot end -->

                    <h3 class="font-medium text-base text-gray-600 leading-tight mt-7">
                        {{ __('Hasil Akhir') }}
                    </h3>

                    <!-- table rank -->
                    <div class="relative overflow-x-auto my-3">
                        <table class="w-full text-sm text-center rtl:text-right text-gray-500">
                            <thead class="text-xs text-gray-700 capitalize bg-gray-200">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Id Alternatif
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        total
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($ranking as $key => $item)
                                <tr class="bg-white border-b">
                                    @foreach ($item as $k => $item)
                                    <td class="px-6 py-4">
                                        {{ $item }}
                                    </td>
                                    @endforeach
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- table rank end -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>