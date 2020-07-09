@extends('layout')

@section('style')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset("plugins/datatables-bs4/css/dataTables.bootstrap4.min.css") }}">
<link rel="stylesheet" href="{{ asset("plugins/datatables-responsive/css/responsive.bootstrap4.min.css") }}">    
@endsection

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Transaksi</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Transaksi</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Barcode</th>
                  <th>Produk</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>8999909028234</td>
                  <td>DJI SAM SOE KRETEK 12</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>8999909096004</td>
                  <td>SAMPOERNA MILD FILTER 16</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>8997004301184</td>
                  <td>OISHI UDANG PEDAS 70GR</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>8996196002954</td>
                  <td>PIATTOS RUMPUT LAUT 85GR</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>8997004301146 </td>
                  <td>OISHI RIN BEE KEJU</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>8999999000066</td>
                  <td>TARO POTATO 40G</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>89686600247</td>
                  <td>CHEETOS JAGUNG BAKAR 40G</td>
                </tr>
                </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection

@section('script')
<!-- DataTables -->
<script src="{{ asset("plugins/datatables/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js") }}"></script>
<script src="{{ asset("plugins/datatables-responsive/js/dataTables.responsive.min.js") }}"></script>
<script src="{{ asset("plugins/datatables-responsive/js/responsive.bootstrap4.min.js") }}"></script>   

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection