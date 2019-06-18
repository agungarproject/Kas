@extends('admin.index')
 @section('content')
 <section class="content">
   <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Update Suplier</h3>
    </div>
      <form method="post" action="{{route('suplier.update', $suplier->id)}}" enctype="multipart/form-data">
        @csrf
       <div class="box-body">
        <div class="form-group">
          <label for="kode">Nama</label>
          <input type="text" class="form-control" name="nama" id="nama" placeholder="" value="{{$suplier->nama}}">
        </div>
        <div class="form-group">
          <label for="nama">no Telpon</label>
          <input type="text" class="form-control" name="notelp" id="notelp" placeholder="" value="{{$suplier->notelp}}">
        </div>
        <div class="form-group">
          <label for="suplier">email</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="" value="{{$suplier->email}}">
        </div>
        <div class="form-group">
          <label for="harga">Alamat</label>
          <input type="text" class="form-control" name="alamat" id="alamat" placeholder="" value="{{$suplier->alamat}}">
        </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button href="{{ route('suplier.index') }}" class="btn btn-danger">Cancel</button>
      </div>
      </form>
    </div>
  </section>    
 @endsection