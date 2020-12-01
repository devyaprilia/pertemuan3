<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url().'assets/jquery-ui/jquery-ui.js'?>" type="text/javascript"></script>
    <link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css" media="all" rel="stylesheet">
    <link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css" media="all" rel="stylesheet">
    <link href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all" rel="stylesheet">
    <style>

    </style>
</head>
<body>
  <!-- Content Wrapper. Contains page content -->
  <section class="content-wrapper">
    <div class="container">
    <div class="content">
    <!-- Content Header (Page header) -->
    <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h3 class="text-center">Register</h3>
        </div>
        <div class="box-body">
          <div class="user-profile-form">

            <form action="<?php echo base_url('login_ctrl/do_register') ?>" method="post" role="form" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-2">
                    <label for="nama">Username</label>
                </div>
                <div class="col-md-10">
                    <div class="form-group field-nama required">
                      <input type="text" id="username" class="form-control" name="username" maxlength="255" aria-required="true">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label for="nama">Email</label>
                </div>
                <div class="col-md-10">
                    <div class="form-group field-nama required">
                      <input type="text" id="email" class="form-control" name="email" maxlength="255" aria-required="true">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label for="nama">password</label>
                </div>
                <div class="col-md-10">
                    <div class="form-group field-nama required">
                      <input type="password" id="password" class="form-control" name="password" maxlength="255" aria-required="true">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label for="tanggal">Tanggal</label>
                </div>
                <div class="col-md-10">
                    <div class="form-group field-tanggal">
                      <input type="date" class="form-control" name="tanggal">
                    </div>
                  </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label for="gambar">Gambar</label>
                </div>
                <div class="col-md-10">
                    <div class="form-group field-gambar required">
                      <div><input id="gambar" class="empty-value" name="gambar" type="file"></div>
                  </div>
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-10">
                    <a href="<?php echo base_url('login_ctrl/index');?>" class="btn btn-danger"><i class="fa fa-times"></i> Batal</a>
                    <button type="submit" class="btn btn-success"><i class='fa fa-fw fa-save'></i> Simpan</button> </div>
              </div>
            </form>

            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
  </section>
    <!-- Main content -->
      <!-- /.box -->
    <!-- /.content -->
  <!-- /.content-wrapper -->

</body>
<script>

</script>
</html>
