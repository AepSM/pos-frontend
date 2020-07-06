<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ asset("img/AdminLTELogo.png") }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset("img/user2-160x160.jpg") }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{ url('/dashboard') }}" class="nav-link {{ set_active(['dashboard', 'dashboard/*']) }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/transaksi') }}" class="nav-link {{ set_active(['transaksi', 'transaksi/*']) }}">
            <i class="nav-icon fas fa-arrow-right"></i>
            <p>
              Transaksi
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/inventory') }}" class="nav-link {{ set_active(['inventory', 'inventory/*']) }}">
            <i class="nav-icon fas fa-arrow-right"></i>
            <p>
              Inventory
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/stock_opname') }}" class="nav-link {{ set_active(['stock_opname', 'stock_opname/*']) }}">
            <i class="nav-icon fas fa-arrow-right"></i>
            <p>
              Stock Opname
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/purchase_order') }}" class="nav-link {{ set_active(['purchase_order', 'purchase_order/*']) }}">
            <i class="nav-icon fas fa-arrow-right"></i>
            <p>
              Purchase Order
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/retur_receipt') }}" class="nav-link {{ set_active(['retur_receipt', 'retur_receipt/*']) }}">
            <i class="nav-icon fas fa-arrow-right"></i>
            <p>
              Retur & Receipt
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/user_jabatan') }}" class="nav-link {{ set_active(['user_jabatan', 'user_jabatan/*']) }}">
            <i class="nav-icon fas fa-arrow-right"></i>
            <p>
              User & Jabatan
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-arrow-right"></i>
            <p>
              Laporan
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/layout/top-nav.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Sales</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Stock Barang</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/boxed.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>PO</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>