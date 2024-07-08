<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $kriteria = Kriteria::all();
    return view('kriteria.index', compact('kriteria'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('kriteria.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    try {
      $kriteria = new Kriteria();
      $kriteria->id_kriteria = $request->id;
      $kriteria->nama_kriteria = $request->nama_kriteria;
      $kriteria->atribut = $request->atribut;
      $kriteria->bobot = $request->bobot;
      $kriteria->save();
      toastr()->success('Berhasil Menambahkan Data');
      return redirect()->route('kriteria.index');
    } catch (\Throwable $th) {
      dd($th);
    }
  }

  /**
   * Display the specified resource.
   */
  public function show(Kriteria $kriteria)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit($id)
  {
    $kriteria = Kriteria::find($id);
    return view('kriteria.edit', compact('kriteria'));
  }


  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Kriteria $kriteria)
  {
    try {
      $kriteria->id_kriteria = $request->id;
      $kriteria->nama_kriteria = $request->nama_kriteria;
      $kriteria->atribut = $request->atribut;
      $kriteria->bobot = $request->bobot;
      $kriteria->save();
      toastr()->success('Berhasil Menyimpan Data');
      return redirect()->route('kriteria.index');
    } catch (\Exception $e) {
      dd($e->getMessage());
    }
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy($id)
  {
    try {
      $kriteria = Kriteria::findOrFail($id);
      $kriteria->delete();
      toastr()->success('Berhasil Menghapus Data');
      return redirect()->route('kriteria.index');
    } catch (\Throwable $th) {
      dd($th);
    }
  }
}
