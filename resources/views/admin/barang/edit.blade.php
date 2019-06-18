@extends('admin.index')
 @section('content')
 <section class="content">
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Update Barang</h3>
  </div>
      <form method="post" action="{{route('barang.update', $barang->id)}}" enctype="multipart/form-data">
        @csrf
        <div class="box-body">
        <div class="form-group">
          <label for="kode">Kode Barang</label>
          <input type="text" class="form-control" name="kode" id="kode" placeholder="Kode barang" value="{{$barang->kode}}">
        </div>
        <div class="form-group">
          <label for="nama">Nama Barang</label>
          <input type="text" class="form-control" name="nama" id="nama" placeholder="nama barang" value="{{$barang->nama}}">
        </div>
        <div class="form-group">
          <label for="suplier">Suplier</label>
          <input type="text" class="form-control" name="suplier" id="suplier" placeholder="suplier" value="{{$barang->suplier}}">
        </div>
        <div class="form-group">
          <label for="harga">Harga</label>
          <input type="number" class="form-control" name="harga" id="harga" placeholder="100000000" value="{{$barang->harga}}">
        </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button href="{{ route('barang.index') }}" class="btn btn-danger">Cancel</button>
     </div>
      </form>
    </div>
  </section>    
 @endsection