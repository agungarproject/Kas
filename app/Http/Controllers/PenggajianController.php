<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penggajian;

class PenggajianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembelians = Penggajian::all();
        return view('pengeluaran.penggajian.index', ['pembelian' => $pembelians]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $jumlah = Penggajian::count();
        $last_id = Penggajian::orderBy('id', 'desc')->first()->id;
        $no_trans = '';
        if($jumlah < 10) {
            $urutan = $last_id+1;
            $no_trans = 'TRANS0'.$urutan;
        } else if($jumlah >= 10 and $jumlah < 100) {
            $urutan = $last_id+1;
            $no_trans = 'TRANS00'.$urutan;
        } else if($jumlah >= 100 and $jumlah < 1000) {
            $urutan = $last_id+1;
            $no_trans = 'TRANS000'.$urutan;
        } else {
            $urutan = $last_id+1;
            $no_trans = 'TRANS0000'.$urutan;
        }

        return view('pengeluaran.penggajian.create', compact('barang', 'no_trans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $penggajian = new Penggajian;
        $penggajian->notrans = $request->notrans;
        $penggajian->periode = $request->periode;
        $penggajian->total = $request->total;
        $penggajian->keterangan = $request->keterangan;
        $penggajian->save();
     
        return redirect()->route('penggajian.create')->with('success', 'Pengajian berhasil ditambah');
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
        $user = Penggajian::find($id);  
        $user->delete();
        return redirect()->route('penggajian.index')->with('hapus', 'Barang berhasil dihapus');
    }
}
