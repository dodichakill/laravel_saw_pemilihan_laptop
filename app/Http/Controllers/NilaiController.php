<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nilais = Nilai::all();
        return view('nilai.index', compact('nilais'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $alts = Alternatif::all();
        return view('nilai.create', compact('alts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $nilai = new Nilai();
            $nilai->id = microtime(true);
            $nilai->id_alt = $request->id_alt;
            $nilai->harga = $request->harga;
            $nilai->skor_prosesor = $request->skor_prosesor;
            $nilai->ram = $request->ram;
            $nilai->penyimpanan = $request->penyimpanan;
            $nilai->ukuran_layar = $request->ukuran_layar;
            $nilai->daya_baterai = $request->baterai;
            $nilai->save();
            toastr()->success('Berhasil Menambahkan Data');
            return redirect()->route('nilai.index');
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Nilai $nilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $alt = Nilai::findOrFail($id);
        return view('nilai.edit', compact('alt'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
            $id = $request->id;
            $nilai = Nilai::findOrFail($id);
            $nilai->update([
                'id_alt' => $request->id_alt,
                'harga' => $request->harga,
                'skor_prosesor' => $request->skor_prosesor,
                'ram' => $request->ram,
                'penyimpanan' => $request->penyimpanan,
                'ukuran_layar' => $request->ukuran_layar,
                'daya_baterai' => $request->baterai
            ]);
            toastr()->success('Berhasil Mengubah Data');
            return redirect()->route('nilai.index');
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $nilai = Nilai::findOrFail($id);
            $nilai->delete();
            toastr()->success('Berhasil Menghapus Data');
            return redirect()->route('nilai.index');
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
