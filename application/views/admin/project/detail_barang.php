<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Data Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php echo $css; ?>
  <link href="<?php echo base_url('inti/admin/sweetalert.css'); ?>" rel="stylesheet">
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php echo $preloader; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Detail Project</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Detail Project</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
          <form method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                    <label>Judul</label>
                    <p class="form-control-static"><?php echo $project['judul_pro']; ?></p>
                </div>
                <div class="form-group">
                    <label>Judul</label>
                    <p class="form-control-static"><?php echo $project['judul_2_pro']; ?></p>
                </div>
                <div class="form-group">
                    <label>Judul</label>
                    <p class="form-control-static"><?php echo $project['judul_3_pro']; ?></p>
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <p class="form-control-static"><?php echo $project['tanggal_pro']; ?></p>
                </div>
                <div class="form-group">
                    <label>Kategori / Role</label>
                    <p class="form-control-static"><?php echo $project['role_pro']; ?></p>
                </div>
                <div class="form-group">
                    <label>Client</label>
                    <p class="form-control-static"><?php echo $project['client_pro']; ?></p>
                </div>
                <div class="form-group">
                    <label>Sub Point</label>
                    <p class="form-control-static"><?php echo $project['point_11_pro']; ?></p>
                </div>
                <div class="form-group">
                    <label>Sub Poin2</label>
                    <p class="form-control-static"><?php echo $project['point_12_pro']; ?></p>
                </div>
                <div class="form-group">
                    <label>Sub Poin3</label>
                    <p class="form-control-static"><?php echo $project['point_13_pro']; ?></p>
                </div>
                <div class="form-group">
                    <label>Sub Poin4</label>
                    <p class="form-control-static"><?php echo $project['point_14_pro']; ?></p>
                </div>
                <div class="form-group">
                    <label>Sub Poin5</label>
                    <p class="form-control-static"><?php echo $project['point_15_pro']; ?></p>
                </div>
                <div class="form-group">
                    <label>Sub Poin6</label>
                    <p class="form-control-static"><?php echo $project['point_16_pro']; ?></p>
                </div>
                <div class="form-group">
                    <label>Sub Poin7</label>
                    <p class="form-control-static"><?php echo $project['point_21_pro']; ?></p>
                </div>
                <div class="form-group">
                    <label>Sub Poin8</label>
                    <p class="form-control-static"><?php echo $project['point_22_pro']; ?></p>
                </div>
                <div class="form-group">
                    <label>Sub Poin9</label>
                    <p class="form-control-static"><?php echo $project['point_31_pro']; ?></p>
                </div>
                <div class="form-group">
                    <label>Sub Poin10</label>
                    <p class="form-control-static"><?php echo $project['point_32_pro']; ?></p>
                </div>
                <div class="form-group">
                    <label>Sub Poin11</label>
                    <p class="form-control-static"><?php echo $project['point_41_pro']; ?></p>
                </div>
                <div class="form-group">
                    <label>Sub Poin12</label>
                    <p class="form-control-static"><?php echo $project['point_42_pro']; ?></p>
                </div>
                <div class="form-group">
                    <label>Sub Point13</label>
                    <p class="form-control-static"><?php echo $project['point_51_pro']; ?></p>
                </div>
                <div class="form-group">
                    <label>Sub Poin14</label>
                    <p class="form-control-static"><?php echo $project['point_52_pro']; ?></p>
                </div>
                <div class="form-group">
                    <label>Sub Poin15</label>
                    <p class="form-control-static"><?php echo $project['point_53_pro']; ?></p>
                </div>
                <div class="form-group">
                    <label>Mini Deskripsi</label>
                    <p class="form-control-static"><?php echo $project['mini_pro']; ?></p>
                </div>
                <div class="form-group">
                    <label>Mini Deskripsi 2</label>
                    <p class="form-control-static"><?php echo $project['mini_2_pro']; ?></p>
                </div>
                <div class="form-group">
                    <label>Mini Deskripsi 3</label>
                    <p class="form-control-static"><?php echo $project['mini_3_pro']; ?></p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                    <label>Mini Deskripsi 4</label>
                    <p class="form-control-static"><?php echo $project['mini_4_pro']; ?></p>
                </div>
                <div class="form-group">
                    <label>Mini Deskripsi 5</label>
                    <p class="form-control-static"><?php echo $project['mini_5_pro']; ?></p>
                </div>
                <div class="form-group p-t-4">
                  <label>Foto 1</label>
                  <p class="form-control-static"><?php echo $project['img_1_pro']; ?></p>
                  <img src="<?php echo $project['img_1_pro']; ?>" style="width: 300px;">
                </div>
                <div class="form-group p-t-4">
                  <label>Foto 2</label>
                  <p class="form-control-static"><?php echo $project['img_2_pro']; ?></p>
                  <img src="<?php echo $project['img_2_pro']; ?>" style="width: 300px;">
                </div>
                <div class="form-group p-t-4">
                  <label>Foto 3</label>
                  <p class="form-control-static"><?php echo $project['img_3_pro']; ?></p>
                  <img src="<?php echo $project['img_3_pro']; ?>" style="width: 300px;">
                </div>
                <div class="form-group p-t-4">
                  <label>Foto 4</label>
                  <p class="form-control-static"><?php echo $project['img_4_pro']; ?></p>
                  <img src="<?php echo $project['img_4_pro']; ?>" style="width: 300px;">
                </div>
                <div class="form-group p-t-4">
                  <label>Foto 5</label>
                  <p class="form-control-static"><?php echo $project['img_5_pro']; ?></p>
                  <img src="<?php echo $project['img_5_pro']; ?>" style="width: 300px;">
                </div>
                <div class="form-group p-t-4">
                  <label>Foto 6</label>
                  <p class="form-control-static"><?php echo $project['img_6_pro']; ?></p>
                  <img src="<?php echo $project['img_6_pro']; ?>" style="width: 300px;">
                </div>
                <div class="form-group p-t-4">
                  <label>Foto 7</label>
                  <p class="form-control-static"><?php echo $project['img_7_pro']; ?></p>
                  <img src="<?php echo $project['img_7_pro']; ?>" style="width: 300px;">
                </div>
                <div class="form-group p-t-4">
                  <label>Foto 8</label>
                  <p class="form-control-static"><?php echo $project['img_8_pro']; ?></p>
                  <img src="<?php echo $project['img_8_pro']; ?>" style="width: 300px;">
                </div>
                <div class="form-group p-t-4">
                  <label>Foto 9</label>
                  <p class="form-control-static"><?php echo $project['img_9_pro']; ?></p>
                  <img src="<?php echo $project['img_9_pro']; ?>" style="width: 300px;">
                </div>
                <div class="form-group p-t-4">
                  <label>Foto 10</label>
                  <p class="form-control-static"><?php echo $project['img_10_pro']; ?></p>
                  <img src="<?php echo $project['img_10_pro']; ?>" style="width: 300px;">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                    <a href="<?php echo site_url('Project_admin/edit/').$project['id_pro']; ?>" class="btn btn-info">Edit</a>
                    <a href="<?php echo site_url('Project_admin/index'); ?>" class="btn btn-danger">Batal</a>
                </div>
              </div>
            </div>
          </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php echo $footer; ?>
</div>
<!-- ./wrapper -->

<?php echo $js; ?>
<script src="<?php echo base_url('/inti/admin/js/barang/bootstrap_select.min.js'); ?>"></script>
</body>
</html>
