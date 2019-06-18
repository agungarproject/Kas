<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemasukan;

class PemasukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemasukans = pemasukan::all();
        return view('pemasukan.pendapatan.index', ['pemasukan' => $pemasukans]);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

        return view('pemasukan.pendapatan.create', compact('pemasukan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pemasukan = new Pemasukan;
        $pemasukan->notrans = $request->notrans;
        $pemasukan->tanggal = $request->tanggal;
        $pemasukan->jenis = $request->jenis;
        $pemasukan->total = $request->total;
        $pemasukan->keterangan = $request->keterangan;
        $pemasukan->save();
     
        return redirect()->route('Pemasukan.create')->with('success', 'data berhasil dimasukan ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
