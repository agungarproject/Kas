 @extends('admin.index')
 @section('content')
 @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    @if (session('hapus'))
    <div class="alert alert-danger">
        {{ session('hapus') }}
    </div>
@endif
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Data Pemasukan</h4>
          <div class="row">
            <div class="col-12">
                <a class="btn btn-sm btn-primary btn-icon-text" href="">
                  <i class="ti-plus btn-icon-prepend"></i> laporan
                </a>
            </div>    
          </div>
          <hr>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="order-listing" class="table">
                   <thead>
                    <tr>
                    <th>NO</th>  
                    <th>No Transaksi</th>
                    <th>tanggal</th>
                    <th>jenis</th>
                    <th>Total</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
              </thead> 
              <tbody>
                @php $nomor = 1; @endphp
                @foreach($pemasukan as $p)
                <tr>
                  <td>{{$nomor++}}</td>
                  <td>{{ $p->notrans}}</td>
                  <td>{{ $p->tanggal}}</td>
                  <td>{{ $p->jenis}}</td>
                  <td>{{ $p->total}}</td>
                  <td>{{ $p->keterangan}}</td>
                   <td>
                  
                  <form action="" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-icon-text"><i class="ti-trash btn-icon-prepend"></i> Delete</button>
                </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
 @endsection