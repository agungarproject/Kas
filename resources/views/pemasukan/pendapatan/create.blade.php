@extends('admin.index')
 @section('content')
 @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
 <div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Pemasukan</h4>
      <p class="card-description">
        Detail Pemasukan
      </p>
      <form method="post" action="{{ route('pemasukan.save') }}" enctype="multipart/form-data" >
        @csrf
        <div class="form-group">
          <label for="nama">Nomer Transaksi</label>
          <input type="text" class="form-control" name="notrans" id="notrans" placeholder="nomor transaksi">
        </div>
        <div class="form-group">
          <label for="nama">Tanggal</label>
          <input type="date" class="form-control" name="tanggal" id="tanggal">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">jenis Pendapatan</label>
          <select class="form-control form-control-lg" id="jenis" name="jenis">
            <option value="penjualan">penjualan</option>
            <option value="penjualan">penjualan</option>
          </select>
        </div>
        <div class="form-group">
          <label for="harga">total</label>
          <input type="number" class="form-control" name="total" id="total" placeholder="1000000000000">
        </div>
        <div class="form-group">
          <label for="nama">keterangan</label>
          <textarea rows="4" type="text" class="form-control" name="keterangan" id="keterangan" placeholder="keterangan"></textarea> 
        </div>
        <button class="btn btn-danger">Cancel</button>
        <button type="submit" class="btn btn-primary mr-2">simpan</button>
      </form>
    </div>
  </div>
</div>
 @endsection
