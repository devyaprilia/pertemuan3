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
      th, td {
        border :1px solid black;
        padding : 20px;
      }

      th {
        background-color: gray;
      }
      img {
        width: 200px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <table>
          <tr>
            <th> id </th>
            <th> username </th>
            <th> email </th>
            <th> image </th>
            <?php if($this->session->userdata('hak_akses') == 0) : ?>
            <th> action </th>
            <?php endif; ?>
          </tr>
          <?php foreach ($user as $key): ?>
          <tr>
            <td><?php echo $key->id; ?></td>
            <td><?php echo $key->username; ?></td>
            <td><?php echo $key->email; ?></td>
            <td><img src="<?php echo base_url($key->gambar); ?>"></td>

          <?php if($this->session->userdata('hak_akses') == 0){ ?>
            <td>
              <a href="<?php echo base_url('crud/update/'.$key->id); ?>"><button type="submit" class="btn btn-info">Edit</button> </a>
              <a href="<?php echo base_url('crud/delete/'.$key->id); ?>"><button type="submit" class="btn btn-danger">Delete</button></a>
            </td>
          <?php  }  ?>
          </tr>
        <?php endforeach; ?>
        </table>

        <a href="<?php echo base_url('login_ctrl/logout');?>"><button type="button" name="button" class="btn btn-danger">Logout</button></a>
      </div>
    </div>
  </body>
</html>
