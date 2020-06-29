<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Data Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php echo $css; ?>
  <link href="<?php echo base_url('inti/admin/sweetalert.css'); ?>" rel="stylesheet">
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style type="text/css">
    td {
      max-width: 100px;
      overflow: hidden;
      text-overflow: ellipsis;
    }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php echo $preloader; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>- Daftar Project</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
          <a href="<?php echo site_url('Project_admin/addProject') ?>" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah Project</a>
          <table id="productTable" class="table-bordered table-hover" style="table-layout: auto; width: 100%; ">
            <thead>
            <tr>
              <th>Id</th>
              <th>Judul</th>
              <th>Tanggal</th>
              <th>Sub Judul 1</th>
              <th>Sub Judul 2</th>
              <th>Sub Judul 3</th>
              <th>Foto</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php
              foreach ($project as $row) {
                  echo "<tr>";
                  echo "<td>".$row['id_pro']."</td>";
                  echo "<td>".$row['judul_pro']."</td>";
                  echo "<td>".$row['tanggal_pro']."</td>";
                  echo "<td>".$row['point_21_pro']."</td>";
                  echo "<td>".$row['point_31_pro']."</td>";
                  echo "<td>".$row['point_41_pro']."</td>";
                  echo "<td>".$row['img_1_pro']."</td>";
                  echo "<td class='text-center'>";
                  echo "      <a href='".site_url('Project_admin/edit/').$row['id_pro']."'><i class='fa fa-pencil'></i></a> ";
                  echo "      <a href='".site_url('Project_admin/detail/').$row['id_pro']."'><i class='fa fa-eye'></i></a> ";
                  echo "      <a href='#' data-id='".$row['id_pro']."' data-name='".$row['judul_pro']."' class='sweet-confirm'><i class='fa fa-trash'></i></a>";
                  echo "</td>";
                  echo "</tr>";
              }
            ?>
            </tbody>
            <tfoot>
            <tr>
              <th>Id</th>
              <th>Judul</th>
              <th>Tanggal</th>
              <th>Sub Judul 1</th>
              <th>Sub Judul 2</th>
              <th>Sub Judul 3</th>
              <th>Foto</th>
              <th>Aksi</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php echo $footer; ?>
  <div style="display: none">
    <form id="delete-form" method="POST"></form>
  </div>
</div>
<!-- ./wrapper -->

<?php echo $js; ?>
<!-- Datatable & buttons -->
<script src="<?php echo base_url('/inti/admin/js/barang/dataTables.buttons.min.js'); ?>"></script>
<script src="<?php echo base_url('/inti/admin/js/barang/buttons.flash.min.js'); ?>"></script>
<script src="<?php echo base_url('/inti/admin/js/barang/jszip.min.js'); ?>"></script>
<script src="<?php echo base_url('/inti/admin/js/barang/pdfmake.min.js'); ?>"></script>
<script src="<?php echo base_url('/inti/admin/js/barang/vfs_fonts.js'); ?>"></script>
<script src="<?php echo base_url('/inti/admin/js/barang/buttons.html5.min.js'); ?>"></script>
<script src="<?php echo base_url('/inti/admin/js/barang/buttons.print.min.js'); ?>"></script>
<!-- Delete alert -->
<script src="<?php echo base_url('/inti/admin/js/barang/sweetalert.min.js'); ?>"></script>
<!-- Modified buttons -->
<script>
    $(document).ready(function () {
        $('#productTable').DataTable({
            dom: 'Bfrtip',
            buttons: [{ //customized datatable button
                extend: "excel",
                text: "<br><button><i class='fa fa-table'>Excel</i></button> ",
                exportOptions: {
                    columns: ":not(:last-child)"
                }
            }, {
                extend: "pdf",
                text: "<button><i class='fa fa-file-pdf-o'>Pdf</i></button> ",
                exportOptions: {
                    columns: ":not(:last-child)"
                }
            }, {
                extend: "print",
                text: "<button><i class='fa fa-print'>Print</i></button> ",
                exportOptions: {
                    columns: ":not(:last-child)"
                }
            }]
        });
        $('#productTable tbody').on('click', '.sweet-confirm', function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            var name = $(this).data('name');
            swal({
                    title: "Konfirmasi",
                    text: "Apakah Anda yakin akan menghapus produk " + name + "?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Ya",
                    cancelButtonText: "Tidak",
                    closeOnConfirm: true
                },
                function(){
                    $('#delete-form').attr('action', '<?php echo site_url('Project_admin/delete/'); ?>' + id).submit();
                });
        });
    })
</script>
</body>
</html>
