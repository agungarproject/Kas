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
      <h1>
       Pengguna
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pengguna</li>
      
      </ol>
      
    </section>
    <section class="content">
    <div class="box">
      <div class="box-header">
       <a class="btn btn-sm btn-primary" href="{{ route('user.create') }}">
        <i class="ti-plus btn-icon-prepend"></i> Tambah Pengguna
      </a>
      </div>
        <div class="box-body">
          <table id="USER" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>NO</th>  
                <th>Nama</th>
                <th>email</th>
                <th>hak Akses</th>
                <th width=20%>Pilihan</th>
              </tr>
              </thead>
              <tbody>
            @php $nomor = 1; @endphp
            @foreach($user as $u)
              <tr>
                <td>{{$nomor++}}</td>
                <td>{{ $u->name}}</td>
                <td>{{ $u->email}}</td>
                <td>{{ $u->role_id}}</td>
                <td>
                
                <form action="{{ route('user.delete', $u->id) }}" method="post">
                  @csrf
                  <a href="{{ route('user.edit', $u->id) }}"  class="btn btn-info btn-xs"><i class="glyphicon glyphicon-edit"></i> edit</a>
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
        $('#USER').DataTable()
    </script>
 @endpush