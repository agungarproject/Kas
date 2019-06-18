<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $barangs = Barang::all();
        return view('admin.barang.index', ['barang' => $barangs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barang = new Barang;
        $barang->kode = $request->kode;
        $barang->nama = $request->nama;
        $barang->suplier = $request->suplier;
        $barang->harga = $request->harga;
        $barang->save();
     
        return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambah');
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
         $barang = Barang::find($id);
         return view('admin.barang.edit',compact('barang'));
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
        $barang = Barang::find($id);
        $barang->kode = $request->kode;
        $barang->nama = $request->nama;
        $barang->suplier = $request->suplier;
        $barang->harga = $request->harga;
        $barang->save();
     
        return redirect()->route('barang.index')->with('success', 'Barang berhasil update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Barang::find($id);
        $user->delete();
        return redirect()->route('barang.index')->with('hapus', 'Barang berhasil dihapus');
    }

    public function getdata($id)
    {
        $barang = Barang::find($id);
        $data['nama'] = $barang->nama;
        $data['suplier'] = $barang->suplier;
        $data['harga'] = $barang->harga;

        echo json_encode($data, 200);
    }
}