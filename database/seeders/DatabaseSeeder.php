<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('tb_alternatif')->insert([
            [
                'id_alternatif' => 'A001',
                'nama_alternatif' => 'Asus Ax7',
            ],
            [
                'id_alternatif' => 'A002',
                'nama_alternatif' => 'Acer A5',
            ],
            [
                'id_alternatif' => 'A003',
                'nama_alternatif' => 'HP S700',
            ],
            [
                'id_alternatif' => 'A004',
                'nama_alternatif' => 'Samsung BS',
            ],
            [
                'id_alternatif' => 'A005',
                'nama_alternatif' => 'Infinix X1',
            ],
        ]);

        DB::table('tb_kriteria')->insert([
            [
                'id_kriteria' => 'C01',
                'nama_kriteria' => 'Harga',
                'atribut' => 'cost',
                'bobot' => 0.30,
            ],
            [
                'id_kriteria' => 'C02',
                'nama_kriteria' => 'Score Prosesor',
                'atribut' => 'benefit',
                'bobot' => 0.15,
            ],
            [
                'id_kriteria' => 'C03',
                'nama_kriteria' => 'RAM',
                'atribut' => 'benefit',
                'bobot' => 0.20,
            ],
            [
                'id_kriteria' => 'C04',
                'nama_kriteria' => 'penyimpanan',
                'atribut' => 'benefit',
                'bobot' => 0.15,
            ],
            [
                'id_kriteria' => 'C05',
                'nama_kriteria' => 'Ukuran Layar',
                'atribut' => 'benefit',
                'bobot' => 0.10,
            ],
            [
                'id_kriteria' => 'C06',
                'nama_kriteria' => 'Baterai',
                'atribut' => 'benefit',
                'bobot' => 0.10,
            ],
        ]);

        DB::table('tb_nilai')->insert([
            [
                'id' => 1,
                'id_alt' => 'A01',
                'harga' => 5000000,
                'skor_prosesor' => 3230,
                'ram' => 4,
                'penyimpanan' => 128,
                'ukuran_layar' => 13,
                'daya_baterai' => 52
            ],
            [
                'id' => 2,
                'id_alt' => 'A02',
                'harga' => 6000000,
                'skor_prosesor' => 4230,
                'ram' => 6,
                'penyimpanan' => 256,
                'ukuran_layar' => 14,
                'daya_baterai' => 55
            ],
            [
                'id' => 3,
                'id_alt' => 'A03',
                'harga' => 5500000,
                'skor_prosesor' => 3530,
                'ram' => 4,
                'penyimpanan' => 128,
                'ukuran_layar' => 13,
                'daya_baterai' => 57
            ],
            [
                'id' => 4,
                'id_alt' => 'A04',
                'harga' => 7000000,
                'skor_prosesor' => 3930,
                'ram' => 6,
                'penyimpanan' => 512,
                'ukuran_layar' => 13,
                'daya_baterai' => 60
            ],
            [
                'id' => 5,
                'id_alt' => 'A05',
                'harga' => 6500000,
                'skor_prosesor' => 4320,
                'ram' => 8,
                'penyimpanan' => 256,
                'ukuran_layar' => 14,
                'daya_baterai' => 62
            ],
        ]);
    }
}
