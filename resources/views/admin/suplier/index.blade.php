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
      <h1>Daftar Suplier</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Daftar Suplier</li>
      </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header">
              <a class="btn btn-sm btn-primary" href="{{ route('suplier.create') }}">
                <i class="ti-plus btn-icon-prepend"></i> Tambah Suplier
              </a>
            </div>
            <div class="box-body">
              <table id="suplier" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>NO</th>  
                    <th>nama</th>
                    <th>no telpon</th>
                    <th>email</th>
                    <th>alamat</th>
                    <th width=20%>Pilihan</th>
                  </tr>
                </thead> 
                <tbody>
                  @php $nomor = 1; @endphp
                  @foreach($suplier as $s)
                  <tr>
                    <td>{{$nomor++}}</td>
                    <td>{{ $s->nama}}</td>
                    <td>{{ $s->notelp}}</td>
                    <td>{{ $s->email}}</td>
                    <td>{{ $s->alamat}}</td>
                    <td>
                    <form action="{{ route('suplier.delete', $s->id) }}" method="post">
                      @csrf
                        <a href="{{ route('suplier.edit', $s->id) }}" class="btn btn-info btn-xs">
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
        $('#suplier').DataTable()
    </script>
 @endpush