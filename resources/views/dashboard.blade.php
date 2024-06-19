<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-5 flex flex-col md:flex-row lg:items-center py-5 px-6">
                <img src="{{ asset('images/hero1.png') }}" alt="logo" class="mx-3 md:mx-0 w-20 lg:w-80">
                <div class="mx-3 md:mx-7">
                    <p class="font-semibold text-3xl text-gray-800">Halo {{auth()->user()->name }}!</p>
                    <h2 class="text-leading-4 mt-3 text-lg">Selamat Datang di Web app Sistem Pendukung Keputusan pemilihan laptop menggunakan metode SAW yang telah teruji kevalidannya.</h2>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="font-semibold text-xl text-gray-800 p-5 bg-blue-100 rounded-lg leading-tight"><i class="fa-solid text-blue-600 fa-circle-info me-3"></i>
                    Petunjuk Alur Penggunaan
                </h2>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-700">

                    <!-- timeline -->
                    <div class=" mx-5">
                        <ol class="relative border-s border-gray-200">
                            <li class="mb-5 ms-6">
                                <span class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white">
                                    <i class="fa-solid text-blue-600 fa-rectangle-list scale-75"></i>
                                </span>
                                <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-700">Halaman Alternatif</h3>
                                <p class="mb-4 text-base font-normal text-gray-500">Halaman alternatif adalah halaman yang perlu kamu buka untuk urutan pertama. di halaman ini kamu bisa mengelola semua data alternatif yang nantinya akan digunakan dalam perhitungan SAW pemilihan laptop yang berada di halaman Hitung SAW.</p>
                            </li>
                            <li class="mb-5 ms-6">
                                <span class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white">
                                    <i class="fa-solid text-blue-600 fa-clipboard-check scale-75"></i>
                                </span>
                                <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-700">Halaman Kriteria</h3>
                                <p class="mb-4 text-base font-normal text-gray-500">Halaman Kriteria adalah halaman yang perlu kamu buka untuk urutan kedua. di halaman ini kamu bisa mengelola semua data alternatif yang nantinya akan digunakan dalam perhitungan SAW pemilihan laptop yang berada di halaman Hitung SAW</p>
                            </li>
                            <li class="mb-5 ms-6">
                                <span class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white">
                                    <i class="fa-solid text-blue-600 fa-clipboard-list scale-75"></i>
                                </span>
                                <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-700">Halaman Nilai</h3>
                                <p class="mb-4 text-base font-normal text-gray-500">Halaman Nilai adalah halaman yang perlu kamu buka untuk urutan kedua. di halaman ini kamu bisa mengelola semua data nilai, data nilai yaitu data yang saling terkait antara alternatif dan kriteria yang bisa kita beri nilai untuk nantinya akan digunakan dalam perhitungan SAW pemilihan laptop yang berada di halaman Hitung SAW</p>
                            </li>
                            <li class="mb-5 ms-6">
                                <span class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white">
                                    <i class="fa-solid text-blue-600 fa-calculator scale-75"></i>
                                </span>
                                <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-700">Halaman Hitung SAW</h3>
                                <p class="mb-4 text-base font-normal text-gray-500">Halaman Hitung SAW adalah halaman yang perlu kamu buka untuk urutan terakhir. di halaman ini kamu bisa melihat proses perhitungan SAW mulai dari data nilai, normlaisasi, menghitung bobot, dan menghitung ranking secara otomatis berdasarkan data yang telah dibuat.</p>
                            </li>
                        </ol>
                    </div>
                    <!-- timeline end -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>