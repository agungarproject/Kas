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
    <section class="content-header">
      <h1>Daftar Barang</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Daftar Barang</li>
      </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header">
              <a class="btn btn-sm btn-primary" href="{{ route('barang.create') }}">
                <i class="ti-plus btn-icon-prepend"></i> Tambah Barang
              </a>
            </div>
            <div class="box-body">
              <table id="barang" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>NO</th>  
                    <th>kode</th>
                    <th>nama</th>
                    <th>suplier</th>
                    <th>harga</th>
                    <th width=20%>Pilihan</th>
                  </tr>
                </thead> 
                <tbody>
                  @php $nomor = 1; @endphp
                  @foreach($barang as $b)
                  <tr>
                    <td>{{$nomor++}}</td>
                    <td>{{ $b->kode}}</td>
                    <td>{{ $b->nama}}</td>
                    <td>{{ $b->suplier}}</td>
                    <td>Rp. {{ number_format($b->harga, 0, ',', '.') }}</td>
                    <td>
                    <form action="{{ route('barang.delete', $b->id) }}" method="post">
                      @csrf
                        <a href="{{ route('barang.edit', $b->id) }}" class="btn btn-info btn-xs">
                            <i class="glyphicon glyphicon-edit"></i> Edit
                        </a>
                        <button type="submit" class="btn btn-danger btn-xs">
                            <i class="glyphicon glyphicon-trash"></i> Delete
                        </button>
                      </form>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
        </div>
    </section>
        
 @endsection

 @push('script')
    <script>
        $('#barang').DataTable()
    </script>
 @endpush