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
      <h1>Edit Project</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Edit Project</li>
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
                    <input name="judul" id="judul" type="text" maxlength="100" class="form-control" value="<?php echo $project['judul_pro']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Judul 2</label>
                    <input name="judul2" id="judul2" type="text" maxlength="100" class="form-control" value="<?php echo $project['judul_2_pro']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Judul 3</label>
                    <input name="judul3" id="judul3" type="text" maxlength="100" class="form-control" value="<?php echo $project['judul_3_pro']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input name="tanggal" id="tanggal" type="date" class="form-control" value="<?php echo $project['tanggal_pro']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Kategori / Role</label>
                    <input name="role" id="role" type="text" class="form-control" value="<?php echo $project['role_pro']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Client</label>
                    <input name="client" id="client" type="text" class="form-control" value="<?php echo $project['client_pro']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Sub Point</label>
                    <input name="point" id="point" type="text" class="form-control" value="<?php echo $project['point_11_pro']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Sub Point 2</label>
                    <input name="point2" id="point2" type="text" class="form-control" value="<?php echo $project['point_12_pro']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Sub Point 3</label>
                    <input name="point3" id="point3" type="text" class="form-control" value="<?php echo $project['point_13_pro']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Sub Point 4</label>
                    <input name="point4" id="point4" type="text" class="form-control" value="<?php echo $project['point_14_pro']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Sub Point 5</label>
                    <input name="point5" id="point5" type="text" class="form-control" value="<?php echo $project['point_15_pro']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Sub Point 6</label>
                    <input name="point6" id="point6" type="text" class="form-control" value="<?php echo $project['point_16_pro']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Sub Point 7</label>
                    <input name="point21" id="point21" type="text" class="form-control" value="<?php echo $project['point_21_pro']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Sub Point 8</label>
                    <input name="point22" id="point22" type="text" class="form-control" value="<?php echo $project['point_22_pro']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Sub Point 9</label>
                    <input name="point31" id="point31" type="text" class="form-control" value="<?php echo $project['point_31_pro']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Sub Point 10</label>
                    <input name="point32" id="point32" type="text" class="form-control" value="<?php echo $project['point_32_pro']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Sub Point 11</label>
                    <input name="point41" id="point41" type="text" class="form-control" value="<?php echo $project['point_41_pro']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Sub Point 12</label>
                    <input name="point42" id="point42" type="text" class="form-control" value="<?php echo $project['point_42_pro']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Sub Point 13</label>
                    <input name="point51" id="point51" type="text" class="form-control" value="<?php echo $project['point_51_pro']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Sub Point 14</label>
                    <input name="point52" id="point52" type="text" class="form-control" value="<?php echo $project['point_52_pro']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Sub Point 15</label>
                    <input name="point53" id="point53" type="text" class="form-control" value="<?php echo $project['point_53_pro']; ?>" required>
                </div>
                <div class="form-group p-t-4">
                  <label>Deskripsi</label>
                  <div class="box-body pad">
                    <input class="form-control" value="<?php echo $project['mini_pro']; ?>" readonly>
                    <textarea class="textarea" name="mini" id="mini" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
                </div>
                <div class="form-group p-t-4">
                  <label>Deskripsi</label>
                  <div class="box-body pad">
                    <input class="form-control" value="<?php echo $project['mini_2_pro']; ?>" readonly>
                    <textarea class="textarea" name="mini2" id="mini2" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
                </div>
                <div class="form-group p-t-4">
                  <label>Deskripsi</label>
                  <div class="box-body pad">
                    <input class="form-control" value="<?php echo $project['mini_3_pro']; ?>" readonly>
                    <textarea class="textarea" name="mini3" id="mini3" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group p-t-4">
                  <label>Deskripsi</label>
                  <div class="box-body pad">
                    <input class="form-control" value="<?php echo $project['mini_4_pro']; ?>" readonly>
                    <textarea class="textarea" value="<?php echo $project['mini_4_pro']; ?>" name="mini4" id="mini4" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
                </div>
                <div class="form-group p-t-4">
                  <label>Deskripsi</label>
                  <div class="box-body pad">
                    <input class="form-control" value="<?php echo $project['mini_5_pro']; ?>" readonly>
                    <textarea class="textarea" value="<?php echo $project['mini_5_pro']; ?>" name="mini5" id="mini5" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
                </div>
                <div class="form-group p-t-4">
                    <label>Foto Link</label>
                    <input name="foto" id="foto" type="text" maxlength="255" value="<?php echo $project['img_1_pro']; ?>" class="form-control">
                </div>
                <div class="form-group p-t-4">
                    <label>Foto Link 2</label>
                    <input name="foto2" id="foto2" type="text" maxlength="255" value="<?php echo $project['img_2_pro']; ?>" class="form-control">
                </div>
                <div class="form-group p-t-4">
                    <label>Foto Link 3</label>
                    <input name="foto3" id="foto3" type="text" maxlength="255" value="<?php echo $project['img_3_pro']; ?>" class="form-control">
                </div>
                <div class="form-group p-t-4">
                    <label>Foto Link 4</label>
                    <input name="foto4" id="foto4" type="text" maxlength="255" value="<?php echo $project['img_4_pro']; ?>" class="form-control">
                </div>
                <div class="form-group p-t-4">
                    <label>Foto Link 5</label>
                    <input name="foto5" id="foto5" type="text" maxlength="255" value="<?php echo $project['img_5_pro']; ?>" class="form-control">
                </div>
                <div class="form-group p-t-4">
                    <label>Foto Link 6</label>
                    <input name="foto6" id="foto6" type="text" maxlength="255" value="<?php echo $project['img_6_pro']; ?>" class="form-control">
                </div>
                <div class="form-group p-t-4">
                    <label>Foto Link 7</label>
                    <input name="foto7" id="foto7" type="text" maxlength="255" value="<?php echo $project['img_7_pro']; ?>" class="form-control">
                </div>
                <div class="form-group p-t-4">
                    <label>Foto Link 8</label>
                    <input name="foto8" id="foto8" type="text" maxlength="255" value="<?php echo $project['img_8_pro']; ?>" class="form-control">
                </div>
                <div class="form-group p-t-4">
                    <label>Foto Link 9</label>
                    <input name="foto9" id="foto9" type="text" maxlength="255" value="<?php echo $project['img_19_pro']; ?>" class="form-control">
                </div>
                <div class="form-group p-t-4">
                    <label>Foto Link 10</label>
                    <input name="foto10" id="foto10" type="text" maxlength="255" value="<?php echo $project['img_10_pro']; ?>" class="form-control">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                    <button class="btn btn-info">Edit</button>
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

<!-- <script>
  $(function () {
    $('#tipe').val('<?php echo $artikel['tipe_pr']; ?>').trigger('change');
    $('#tag').val('<?php echo $artikel['tag_pr']; ?>').trigger('change');
  })
</script> -->
<script src="<?php echo base_url('/inti/admin/js/barang/bootstrap_select.min.js'); ?>"></script>
</body>
</html>
