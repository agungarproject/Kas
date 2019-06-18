@extends('admin.index')
 @section('content')
 @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
  <section class="content-header">
      <h1>
        Pembelian
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pembelian</li>
      </ol>
      <br>
  </section>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
      </ul>
    </div>
    @endif
  <section class="content">
   <div class="col-12">    
    <div class="box">
      <div class="box-body">
        <p class="card-description">
          Masukan Data Pembelian
        </p>
        <a class="btn btn-sm btn-primary pull-right" href="">
          <i class="ti-plus btn-icon-prepend"></i> history Pembelian
        </a>
        <form method="post" action="{{ route('pembelian.save') }}" enctype="multipart/form-data" oninput="total.value=parseInt(harga.value)*parseInt(quantity.value)">

        <!-- <form method="post" action="{{ route('pembelian.save') }}" enctype="multipart/form-data" oninput="total.value=parseInt(harga.value)*parseInt(quantity.value)"> -->
          @csrf
          <div class="form-group">
            <label for="nama">Nomer Transaksi</label>
            <input type="text" class="form-control" name="notrans" id="notrans" value="{{ $no_trans }}" readonly>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Kode BArang</label>
            <select class="form-control form-control-lg" id="barang" name="kode">
              @foreach($barang as $row)
              <option value="{{$row->id}}">{{$row->kode}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="nama">Nama Barang</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="nama barang">
          </div>
          <div class="form-group">
            <label for="suplier">Suplier</label>
            <input type="text" class="form-control" name="suplier" id="suplier" placeholder="suplier">
          </div>
          <div class="form-group">
            <label for="suplier">harga</label>
            <input type="number" class="form-control" name="harga" id="harga" placeholder="suplier">
          </div>
          <div class="form-group">
            <label for="harga">Quantity</label>
            <input type="number" class="form-control" name="quantity" id="quantity" placeholder="10">
          </div>
          <div class="form-group">
            <label for="harga">total</label>
            <input type="number" class="form-control" name="total" id="total" placeholder="1000000000000">
          </div>
          <button type="button" class="btn btn-sm btn-danger">Cancel</button>
          <button type="submit" class="btn btn-primary btn-flat btn-sm">
            <i class="fa fa-send"></i> Simpan
          </button>
        </form>
      </div>
    </div>
  </div>
</section>
 @endsection
 @push('script')
  <script type="text/javascript">
    $(document).ready(function(){
      $("#barang").change(function(){
        var id = $(this).val();
        
        $.ajax({
          type : "get",
          url : "{{ url('admin/barang/getdata/') }}/" + id,
          data : "",
          dataType: "json",
          success: function (data) {
            document.getElementById("nama").value = data.nama;
            document.getElementById("suplier").value = data.s