<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use App\Models\Nilai;

class HitungController extends Controller
{
    public function index()
    {
        $nilais = Nilai::all();

        // normalisasi
        $normalisasi = [];
        foreach ($nilais as $key => $value) {

            $n_harga = $this->minMax('harga', 1) / $value->harga;
            $n_skor_prosesor = $value->skor_prosesor / $this->minMax('skor_prosesor', 2);
            $n_penyimpanan = $value->penyimpanan / $this->minMax('penyimpanan', 2);
            $n_ram = $value->ram / $this->minMax('ram', 2);
            $n_ukuran_layar = $value->ukuran_layar / $this->minMax('ukuran_layar', 2);
            $n_daya_baterai = $value->daya_baterai / $this->minMax('daya_baterai', 2);

            $normalisasi[$key] = [
                'id' => $value->id_alt,
                'harga' => $n_harga,
                'skor_prosesor' => $n_skor_prosesor,
                'ram' => $n_ram,
                'penyimpanan' => $n_penyimpanan,
                'ukuran_layar' => $n_ukuran_layar,
                'daya_baterai' => $n_daya_baterai
            ];
        }

        // min max
        $minmax = [];
        $minmax['harga']['min'] = 'min = ' . $this->minMax('harga', 1);
        $minmax['skor_prosesor']['min'] = 'max = ' . $this->minMax('skor_prosesor', 2);
        $minmax['ram']['min'] = 'max = ' . $this->minMax('ram', 2);
        $minmax['penyimpanan']['min'] = 'max = ' . $this->minMax('penyimpanan', 2);
        $minmax['ukuran_layar']['min'] = 'max = ' . $this->minMax('ukuran_layar', 2);
        $minmax['daya_baterai']['min'] = 'max = ' . $this->minMax('daya_baterai', 2);

        // terbobot
        $terbobot = [];
        foreach ($normalisasi as $key => $value) {
            $terbobot[$key]['id'] = $value['id'];
            $terbobot[$key]['harga'] = $value['harga'] * $this->bobot('Harga');
            $terbobot[$key]['skor_prosesor'] = $value['skor_prosesor'] * $this->bobot('Score Prosesor');
            $terbobot[$key]['ram'] = $value['ram'] * $this->bobot('RAM');
            $terbobot[$key]['penyimpanan'] = $value['penyimpanan'] * $this->bobot('Penyimpanan');
            $terbobot[$key]['ukuran_layar'] = $value['ukuran_layar'] * $this->bobot('Ukuran Layar');
            $terbobot[$key]['daya_baterai'] = $value['daya_baterai'] * $this->bobot('Baterai');
        }

        // rangking
        $total = [];
        $ranking = [];
        foreach ($terbobot as $key => $value) {
            $total[$key] = $value['harga'] + $value['skor_prosesor'] + $value['ram'] + $value['penyimpanan'] + $value['ukuran_layar'] + $value['daya_baterai'];
            $ranking[$key] = [
                'id' => $value['id'],
                'total' => $total[$key]
            ];
        }


        usort($ranking, [self::class, 'sortByTotalDesc']);
        print_r($ranking);
        $i = 1;

        return view('hitung.index', compact('nilais', 'normalisasi', 'minmax', 'terbobot', 'total', 'ranking', 'i'));
    }
    public function minMax(string $column, int $opsi)
    {
        $min = Nilai::min($column);
        $max = Nilai::max($column);
        return $opsi == 1 ? $min : $max;
    }
    function sortByTotalDesc($a, $b)
    {
        return $b['total'] <=> $a['total']; // <=> for concise comparison
    }

    public function bobot(string $kriteria)
    {
        $bobot = Kriteria::where('nama_kriteria', $kriteria)->first();
        return $bobot->bobot;
    }

    public function checkLabel(string $kriteria)
    {
        $bobot = Kriteria::where('kriteria', $kriteria)->first();
        return $bobot->atribut == 'benefit' ? 'Benefit' : 'Cost';
    }
}
