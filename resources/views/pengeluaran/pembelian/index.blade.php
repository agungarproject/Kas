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
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pembelian</li>
      </ol>
      <br>
    </section>
    <section class="content">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data Pembelian</h3>
      </div>
      <div class="box-body">
        <table id="trans" class="table table-bordered table-striped">
          <thead>
                    <tr>
                    <th>NO</th>  
                    <th>No Transaksi</th>
                    <th>Nama</th>
                    <th>suplier</th>
                    <th>harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </tr>
              </thead> 
              <tbody>
                @php $nomor = 1; @endphp
                @foreach($pembelian as $p)
                <tr>
                  <td>{{$nomor++}}</td>
                  <td>{{ $p->notrans}}</td>
                  <td>{{ $p->nama}}</td>
                  <td>{{ $p->suplier}}</td>
                  <td>Rp. {{ number_format($p->harga, 0, ',', '.') }}</td>
                  <td>{{ $p->quantity}}</td>
                  <td>Rp. {{ number_format($p->total, 0, ',', '.') }}</td>
                   <td>
                  
                  <form action="{{ route('pembelian.delete', $p->id) }}" method="post">
                    @csrf
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
      <!-- /.box-body -->
    </div>
  </section>
 @endsection

    @push('script')
        <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#trans').DataTable( {
                    dom: 'Bfrtip',
                    lengthMenu : [
                        [10,25,50,-1],
                        ['10 rows', '25 rows', '50 rows', 'Show all']
                    ],
                    buttons: [
                        'pageLength',                        
                        {
                            extend : 'pdf',
                            text : function (dt, button, config) {
                                return dt.i18n('buttons.pdf', 'Cetak Pdf');
                            }
                        }
                    ],
                    exportOptions : {
                        columns : 'visible'
                    }
                });
            });
        </script>
    @endpush