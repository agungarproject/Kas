 @extends('admin.index')
 @section('content')
<section class="content-header">
  <h1>Tambah Barang</h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Tambah Barang</li>
  </ol>
</section>
<section class="content">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h5 class="box-title">Masukan Data Barang</h5>
    </div>
      <form method="post" action="{{ route('barang.save') }}" enctype="multipart/form-data">
        @csrf
        <div class="box-body">
          <div class="form-group">
            <label for="kode">Kode Barang</label>
            <input type="text" class="form-control" name="kode" id="kode" placeholder="Kode barang">
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
            <label for="harga">Harga</label>
            <input type="number" class="uang form-control" name="harga" id="harga" placeholder="100000000">
          </div>
        </div>       
          <div class="box-footer"> 
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <a href="{{ route('barang.index') }}" class="btn btn-danger">Cancel</a></div>
      </form>
  </div>
</section>
<script type="text">
  document.getElementById("harga").onblur =function ()
  { //number-format the user input
   this.value = parseFloat(this.value.replace(/,/g, "")) .toFixed(2) .toString() .replace(/\B(?=(\d{3})+(?!\d))/g, ","); //set the numeric value to a number input
    document.getElementById("harga").value = this.value.replace(/,/g, "") }
</script>

 @endsection