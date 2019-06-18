 @extends('admin.index')
 @section('content')
<section class="content-header">
  <h1>Tambah Suplier</h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Tambah Suplier</li>
  </ol>
</section>
<section class="content">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h5 class="box-title">Masukan Data Suplier</h5>
    </div>
      <form method="post" action="{{ route('suplier.save') }}" enctype="multipart/form-data">
        @csrf
        <div class="box-body">
          <div class="form-group">
            <label for="kode">Nama Suplier</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="PT. xxxxxx">
          </div>
          <div class="form-group">
            <label for="nama">No telpon</label>
            <input type="text" class="form-control" name="notelp" id="notelp" placeholder="021xxxxx">
          </div>
          <div class="form-group">
            <label for="suplier">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="">
          </div>
          <div class="form-group">
            <label for="harga">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat">
          </div>
        </div>       
          <div class="box-footer"> 
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <a href="{{ route('suplier.index') }}" class="btn btn-danger">Cancel</a></div>
      </form>
  </div>
</section>
 @endsection