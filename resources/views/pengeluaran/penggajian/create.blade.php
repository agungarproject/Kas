 @extends('admin.index')
 @section('content')
<section class="content-header">
  <h1>Penggajian</h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Penggajian</li>
  </ol>
</section>
<section class="content">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h5 class="box-title">Masukan Data Penggajian</h5>
    </div>
      <form method="post" action="{{ route('penggajian.save') }}" enctype="multipart/form-data">
        @csrf
        <div class="box-body">
          <div class="form-group">
            <label for="nama">Nomer Transaksi</label>
            <input type="text" class="form-control" name="notrans" id="notrans" value="{{ $no_trans }}" readonly>
          </div>
          <div class="form-group">
            <label for="nama">Periode</label>
            <input type="text" class="form-control" name="periode" id="periode">
          </div>
          <div class="form-group">
            <label for="total">Total</label>
            <input type="number" class="form-control" name="total" id="total" placeholder="total">
          </div>
          <div class="form-group">
            <label for="harga">keterangan</label>
            <input type="text" class="uang form-control" name="keterangan" id="keterangan">
          </div>
        </div>       
          <div class="box-footer"> 
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <a href="{{ route('penggajian.create') }}" class="btn btn-danger">Cancel</a></div>
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