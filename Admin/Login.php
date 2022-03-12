<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script type="text/javascript">
      function ValidAdmin() {
        var AdminName=document.getElementById('AdminName').value;
        var AdminPassword=document.getElementById('AdminPassword').value;
        var Err=document.getElementById('error');

        var pattern1="^[A-Za-z0-9]{2,50}$";
        var pattern2="^[A-Za-z0-9@$]{2,50}$";
        var reg=new RegExp(pattern1);
        if (!reg.test(AdminName)) {
          Err.innerHTML="invalid Admin Name";
          return false;
        }
        reg=new RegExp(pattern2);
        if (!reg.test(AdminPassword)) {
          Err.innerHTML="invalid Admin Password";
          return false;
        }
      }
    </script>
</head>
<body class="card-title" style="background-image:url(images/abstract.webp);background-color: #cccccc">
  <br>
  <br>
  <br>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Admin Login</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" action="con_Login.php" onsubmit="return ValidAdmin()">
                <div class="card-body">
                  <div id="error" style="color: red" ></div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Admin Name<b style="color: red">*</b></label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="AdminName" name="AdminName" placeholder="AdminName" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Password<b style="color: red">*</b></label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="AdminPassword" name="AdminPassword" placeholder="Password" required>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Sign in</button>
                  <button href="Login.php" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
</div>
</div>
</div>
</section>
</body>
</html>