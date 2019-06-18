<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Suplier;

class SuplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supliers = Suplier::all();
        return view('admin.suplier.index', ['suplier' => $supliers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.suplier.create');
    }

    /**
     * Store a newly created resource in stsuplier
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $suplier = new Suplier;
        $suplier->nama = $request->nama;
        $suplier->notelp = $request->notelp;
        $suplier->email = $request->email;
        $suplier->alamat = $request->alamat;
        $suplier->save();
     
        return redirect()->route('suplier.index')->with('success', 'Suplier berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SuplierController  $suplierController
     * @return \Illuminate\Http\Response
     */
    public function show(SuplierController $suplierController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SuplierController  $suplierController
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $suplier = Suplier::find($id);
         return view('admin.suplier.edit',compact('suplier'));
    }

    public function getdata($id)
    {
        $suplier = Suplier::find($id);
        $data['nama'] = $Suplier->nama;
        $data['notelp'] = $Suplier->notelp;
        $data['email'] = $Suplier->email;
        $data['alamat'] = $Suplier->alamat;

        echo json_encode($data, 200);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SuplierController  $suplierController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Suplier = Suplier::find($id);
        $Suplier->nama = $request->nama;
        $Suplier->notelp = $request->notelp;
        $Suplier->email = $request->email;
        $Suplier->alamat = $request->alamat;
        $Suplier->save();
     
        return redirect()->route('suplier.index')->with('success', 'Suplier berhasil update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SuplierController  $suplierController
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuplierController $suplierController)
    {
        $suplier = Suplier::find($id);
        $suplier->delete();
        return redirect()->route('suplier.index')->with('hapus', 'Data Suplier berhasil dihapus');
    }

}
