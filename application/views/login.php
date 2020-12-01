<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css" media="all" rel="stylesheet">
      <link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css" media="all" rel="stylesheet">
      <link href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all" rel="stylesheet">
    <title>Login Page</title>
    <style media="screen">
      input {
        margin-top: 20px;
        margin-left: 290px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="text-center"> Login </h3>
            </div>

            <div class="box-body">
              <form action="<?php echo base_url('login_ctrl/do_login'); ?>" method="post" role="form" enctype="multiform/form-data">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group required">
                      <input type="text"class="form-control" name="username" placeholder="enter username" aria-required="true" maxlength="200" id="username">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group required">
                      <input type="password"class="form-control" name="password" placeholder="enter password" aria-required="true" maxlength="200" id="password">
                    </div>
                  </div>
                </div>
                <div class="row" style="margin-left:320px;">
                  <div class="col-md-7">
                  <button type="submit" style="float:right">Submit</button>
                  </div>
                </div>
              </form>
              <div class="row" style="margin-left:320px;">
                <div class="col-md-7">
                  <a style="float:left; margin-top:-27px;" href="<?php echo base_url('login_ctrl/register') ?>"><button style="color:black;">Register</button></a>
                </div>
              </div>

          </div>
        </div>
      </div>
    </div>
  </body>
</html>
