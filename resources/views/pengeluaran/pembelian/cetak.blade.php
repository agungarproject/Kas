<!-- 
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<h2>BUKTI TRANSAKSI</h2>
	</center>
<br>

<<div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>NO</th>
            <th>Nama Barang</th>
            <th>Suplier</th>
            <th>HARGA</th>
            <th>JUMLAH</th>
            <th>Total</th>            
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>1</td>
            <td>{{ $pembelian->nama }}</td>
            <td>{{ $pembelian->suplier }}</td>
            <td>{{ $pembelian->harga }}</td>
            <td>{{ $pembelian->quantity }}</td>
            <td>{{ $pembelian->total }}</td>            
          </tr>          
          </tbody>
        </table>
      </div>    
    </div>
</body>
</html> -->
<!DOCTYPE html>
<html>
<head>

  <title>PT. Ardi Mandiri</title>
  
  
  <link rel="stylesheet" href="{{url('/assets/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  
  <link rel="stylesheet" href="{{url('/assets/bower_components/font-awesome/css/font-awesome.min.css')}}">
  
  <link rel="stylesheet" href="{{url('/assets/bower_components/Ionicons/css/ionicons.min.css')}}">
  
  <link rel="stylesheet" href="{{url('/assets/dist/css/AdminLTE.min.css')}}">

  <link rel="stylesheet" href="{{url('/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="{{url('/assets/dist/css/skins/_all-skins.min.css')}}">
  <link rel="stylesheet" href="{{url('/assets/plugins/iCheck/square/blue.css')}}">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
<div class="wrapper">
  
  <section class="invoice">
  
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-globe"></i> PT. Ardy Mandiri
          <small class="pull-right">Date: {{ $pembelian->created_at }}</small>
        </h2>
      </div>
  
    </div>
  
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        Alamat
        <address>
          <strong>PT. Ardy Mandiri</strong><br>
          Jl. Guntur Raya Blok B2 No.11<br>
		Bekasi Selatan 17144 Kota Bekasi<br>
		Telp. (62-21) 8895 0397<br>
		Fax. (62-21) 8895 0397<br>
		Email : ardymandiri@gmail.com	

        </address>
      </div>
  
      <div class="col-sm-4 invoice-col">
        PIC Pembuat 
        <address>
          <strong>{{ Auth::user()->name }}</strong><br>
        </address>
      </div>
  
      <div class="col-sm-4 invoice-col">
        <b>Nomor Transaksi :</b><br>
        <br>
        <b>NO:</b> {{ $pembelian->notrans }}<br>
        
      </div>
      
    </div>
  

    
    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>NO</th>
            <th>Nama Barang</th>
            <th>Suplier</th>
            <th>HARGA</th>
            <th>JUMLAH</th>
            <th>Total</th>            
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>1</td>
            <td>{{ $pembelian->nama }}</td>
            <td>{{ $pembelian->suplier }}</td>
            <td>{{ $pembelian->harga }}</td>
            <td>{{ $pembelian->quantity }}</td>
            <td>{{ $pembelian->total }}</td>            
          </tr>          
          </tbody>
        </table>
      </div>    
    </div>
    

  </section>
</div>

</body>
</html>