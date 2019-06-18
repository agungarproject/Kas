<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembelian;
use App\Barang;
use Illuminate\Support\Facades\Validator;
use PDF;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembelians = Pembelian::all();
        return view('pengeluaran.pembelian.index', ['pembelian' => $pembelians]);
    }

    public function cetak_pdf()
    {
    $pembelian = Pembelian::all();
 
    $pdf = PDF::loadview('pembelian_pdf',['pembelian'=>$pembelian]);
    return $pdf->download('laporan-pembelian-pdf');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = Barang::all();
        $jumlah = Pembelian::count();
        $last_id = Pembelian::orderBy('id', 'desc')->first()->id;
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

        return view('pengeluaran.pembelian.create', compact('barang', 'no_trans'));

    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'harga' => 'numeric|required',
            'quantity' => 'numeric|required',
            'total' => 'numeric|required',
        ]);

        $pembelian = new Pembelian;
        $pembelian->notrans = $request->notrans;
        $pembelian->nama = $request->nama;
        $pembelian->suplier = $request->suplier;
        $pembelian->harga = $request->harga;
        $pembelian->quantity = $request->quantity;
        $pembelian->total = $request->total;
        $pembelian->save();
 
        $pdf = PDF::loadview('pengeluaran.pembelian.cetak', ['pembelian'=>$pembelian]);
        return $pdf->download('struk_beli.pdf');
     
        // return redirect()->route('Pembelian.create')->with('success', 'Pembelian Barang berhasil ');
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
        $user = Pembelian::find($id);
        $user->delete();
        return redirect()->route('pembelian.index')->with('hapus', 'Barang berhasil dihapus');
    }
}
