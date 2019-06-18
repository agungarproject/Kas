
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('/assets/dist/img/logopt.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>PT. Ardy Mandiri</p>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
        </div>
      </form>

      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        @if(Auth::user()->role_id == 1 or Auth::user()->role_id == 2)
        <li>
          <a href="{{ route('dashboard.index') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        @endif
        @if(Auth::user()->role_id == 1)
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Data Master</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('user.index') }}"><i class="fa fa-circle-o"></i> Pengguna</a></li>
            <li><a href="{{ route('suplier.index') }}"><i class="fa fa-circle-o"></i> Suplier</a></li>
            <li><a href="{{ route('barang.index') }}"><i class="fa fa-circle-o"></i> Barang</a></li>
          </ul>
        </li>
        @endif
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Pengeluaran</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('Pembelian.create') }}"><i class="fa fa-circle-o"></i> Pembelian</a></li>
            <li><a href="{{ route('penggajian.create')}}"><i class="fa fa-circle-o"></i> Penggajian</a></li>
          </ul>
        </li>
        @if(Auth::user()->role_id == 1)
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('pembelian.index') }}"><i class="fa fa-circle-o"></i> Pembelian</a></li>
            <li><a href="{{ route('penggajian.index') }}"><i class="fa fa-circle-o"></i>Penggajian</a></li>
          </ul>
        </li>
        @endif
      </ul>
    </section>
  </aside>