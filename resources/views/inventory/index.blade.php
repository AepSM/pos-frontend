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
        <h1 class="m-0 text-dark">Inventory</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard v1</li>
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
                <th>Tanggal</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Stok</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>1</td>
                <td>01 Jan 2020</td>
                <td>A001</td>
                <td>Sabun</td>
                <td>50</td>
              </tr>
              <tr>
                <td>2</td>
                <td>02 Jan 2020</td>
                <td>A002</td>
                <td>Sabun Lux</td>
                <td>20</td>
              </tr>
              <tr>
                <td>3</td>
                <td>02 Jan 2020</td>
                <td>A003</td>
                <td>Nuvo</td>
                <td>100</td>
              </tr>
              <tr>
                <td>4</td>
                <td>02 Jan 2020</td>
                <td>A004</td>
                <td>Lifebouy</td>
                <td>40</td>
              </tr>
              <tr>
                <td>5</td>
                <td>02 Feb 2020</td>
                <td>A005</td>
                <td>Piring</td>
                <td>99</td>
              </tr>
              <tr>
                <td>6</td>
                <td>03 Feb 2020</td>
                <td>A006</td>
                <td>Sendok</td>
                <td>49</td>
              </tr>
              <tr>
                <td>7</td>
                <td>04 Feb 2020</td>
                <td>A007</td>
                <td>Tas</td>
                <td>59</td>
              </tr>
              <tr>
                <td>8</td>
                <td>05 Feb 2020</td>
                <td>A008</td>
                <td>handuk</td>
                <td>400</td>
              </tr>
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