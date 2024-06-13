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
                'nama_alternatif' => 'Alternatif 1',
            ],
            [
                'id_alternatif' => 'A002',
                'nama_alternatif' => 'Alternatif 2',
            ],
            [
                'id_alternatif' => 'A003',
                'nama_alternatif' => 'Alternatif 3',
            ],
            [
                'id_alternatif' => 'A004',
                'nama_alternatif' => 'Alternatif 4',
            ],
            [
                'id_alternatif' => 'A005',
                'nama_alternatif' => 'Alternatif 5',
            ],
        ]);

        DB::table('tb_kriteria')->insert([
            [
                'id_kriteria' => 'C01',
                'nama_kriteria' => 'Kriteria 1',
                'atribut' => 'cost',
                'bobot' => 0.1,
            ],
            [
                'id_kriteria' => 'C02',
                'nama_kriteria' => 'Kriteria 2',
                'atribut' => 'benefit',
                'bobot' => 0.2,
            ],
            [
                'id_kriteria' => 'C03',
                'nama_kriteria' => 'Kriteria 3',
                'atribut' => 'benefit',
                'bobot' => 0.3,
            ],
            [
                'id_kriteria' => 'C04',
                'nama_kriteria' => 'Kriteria 4',
                'atribut' => 'benefit',
                'bobot' => 0.4,
            ],
        ]);

        DB::statement("INSERT INTO tb_nilai SELECT NULL, id_alternatif, id_kriteria, ROUND(1 +RAND() * 4), NULL, NULL FROM tb_alternatif, tb_kriteria");
    }
}
