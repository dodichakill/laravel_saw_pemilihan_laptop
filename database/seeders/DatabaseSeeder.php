<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            // harga
            [
                'id_alternatif' => 'A001',
                'id_kriteria' => 'C01',
                'nilai' => 5000000,
            ],
            [
                'id_alternatif' => 'A002',
                'id_kriteria' => 'C01',
                'nilai' => 6000000,
            ],
            [
                'id_alternatif' => 'A003',
                'id_kriteria' => 'C01',
                'nilai' => 5500000,
            ],
            [
                'id_alternatif' => 'A004',
                'id_kriteria' => 'C01',
                'nilai' => 7000000,
            ],
            [
                'id_alternatif' => 'A005',
                'id_kriteria' => 'C01',
                'nilai' => 6500000,
            ],
            // score prosesor
            [
                'id_alternatif' => 'A001',
                'id_kriteria' => 'C02',
                'nilai' => 3230,
            ],
            [
                'id_alternatif' => 'A002',
                'id_kriteria' => 'C02',
                'nilai' => 4230,
            ],
            [
                'id_alternatif' => 'A003',
                'id_kriteria' => 'C02',
                'nilai' => 3530,
            ],
            [
                'id_alternatif' => 'A004',
                'id_kriteria' => 'C02',
                'nilai' => 3930,
            ],
            [
                'id_alternatif' => 'A005',
                'id_kriteria' => 'C02',
                'nilai' => 4320,
            ],
            // ram
            [
                'id_alternatif' => 'A001',
                'id_kriteria' => 'C03',
                'nilai' => 4,
            ],
            [
                'id_alternatif' => 'A002',
                'id_kriteria' => 'C03',
                'nilai' => 6,
            ],
            [
                'id_alternatif' => 'A003',
                'id_kriteria' => 'C03',
                'nilai' => 4,
            ],
            [
                'id_alternatif' => 'A004',
                'id_kriteria' => 'C03',
                'nilai' => 6,
            ],
            [
                'id_alternatif' => 'A005',
                'id_kriteria' => 'C03',
                'nilai' => 8,
            ],
            // penyimpanan
            [
                'id_alternatif' => 'A001',
                'id_kriteria' => 'C04',
                'nilai' => 128,
            ],
            [
                'id_alternatif' => 'A002',
                'id_kriteria' => 'C04',
                'nilai' => 256,
            ],
            [
                'id_alternatif' => 'A003',
                'id_kriteria' => 'C04',
                'nilai' => 128,
            ],
            [
                'id_alternatif' => 'A004',
                'id_kriteria' => 'C04',
                'nilai' => 512,
            ],
            [
                'id_alternatif' => 'A005',
                'id_kriteria' => 'C04',
                'nilai' => 256,
            ],
            // ukuran layar
            [
                'id_alternatif' => 'A001',
                'id_kriteria' => 'C05',
                'nilai' => 13,
            ],
            [
                'id_alternatif' => 'A002',
                'id_kriteria' => 'C05',
                'nilai' => 14,
            ],
            [
                'id_alternatif' => 'A003',
                'id_kriteria' => 'C05',
                'nilai' => 13,
            ],
            [
                'id_alternatif' => 'A004',
                'id_kriteria' => 'C05',
                'nilai' => 13,
            ],
            [
                'id_alternatif' => 'A005',
                'id_kriteria' => 'C05',
                'nilai' => 14,
            ],
            // baterai
            [
                'id_alternatif' => 'A001',
                'id_kriteria' => 'C06',
                'nilai' => 52,
            ],
            [
                'id_alternatif' => 'A002',
                'id_kriteria' => 'C06',
                'nilai' => 55,
            ],
            [
                'id_alternatif' => 'A003',
                'id_kriteria' => 'C06',
                'nilai' => 57,
            ],
            [
                'id_alternatif' => 'A004',
                'id_kriteria' => 'C06',
                'nilai' => 60,
            ],
            [
                'id_alternatif' => 'A005',
                'id_kriteria' => 'C06',
                'nilai' => 62,
            ],
        ]);

        // DB::statement("INSERT INTO tb_nilai SELECT NULL, id_alternatif, id_kriteria, ROUND(1 +RAND() * 4), NULL, NULL FROM tb_alternatif, tb_kriteria");

    }
}
