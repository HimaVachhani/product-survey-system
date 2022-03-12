<?php 
  session_start();
  if(!isset($_SESSION['UserID'])){
    header('Location: UserLogin.php');
  }
?>
<?php
  include_once '../admin/classes/User.php';
  $objUser = new User();
  if (isset($_GET['UserID'])) {
    $resultUser = $objUser->getByPK($_GET);
    $rowUser = $resultUser[0];
    if (!isset($rowUser)) {
      header('Location: index.php');
      die();
    }
  }
?>
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
</head>
<body class="card-title" style="background-color:black ">
  <br>
  <br>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <!-- general form elements -->
              <div class="card card-primary" >
              <div class="card-header">
                <h3 class="card-title">Add User Profile</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="con_NewUser.php">
                <div class="card-body">
                  <div class="form-group">
                    <?php
            if (isset($_GET['UserID'])) {
          ?>
            <input type="text" name="UserID" value="<?= $rowUser['UserID'] ?>" hidden>

          <?php
          }
          ?>
                    
                    <label for="exampleInputEmail1">Enter User Name</label>
                    <input type="text" class="form-control" name="UserName" placeholder=" User Name" 
                    <?php
            if (isset($_GET['UserID'])) {
          ?>
            value="<?= $rowUser['UserName'] ?>"

          <?php
          }
          ?>
          >
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Enter User Password</label>
                    <input type="text" class="form-control" name="Password" placeholder="Password" 
                    <?php
                      if (isset($_GET['UserID'])) {
                    ?>
                      value="<?= $rowUser['Password'] ?>"

                    <?php
                    }
                    ?>
                     >
                  </div>
                  <div class="form-group">
                    <label> Enter Full Name</label>
                <div class="row">
                  <div class="col-4">
                    <input type="text" class="form-control" name="FirstName" placeholder="FirstName"
                    <?php
                      if (isset($_GET['UserID'])) {
                    ?>
                      value="<?= $rowUser['FirstName'] ?>"

                    <?php
                    }
                    ?>
                    >
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" name="MiddleName" placeholder="MiddleName"
                    <?php
                      if (isset($_GET['UserID'])) {
                    ?>
                      value="<?= $rowUser['MiddleName'] ?>"

                    <?php
                    }
                    ?>
                    >
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" name="LastName" placeholder="LastName"
                    <?php
                      if (isset($_GET['UserID'])) {
                    ?>
                      value="<?= $rowUser['LastName'] ?>"

                    <?php
                    }
                    ?>
                    >
                  </div>
                </div>
              <!-- /.card-body -->
            </div>
                  <div class="form-group">
          <label for="exampleInputEmail1">Enter Mobile Number</label>
                    <input type="text" class="form-control" name="MobileNumber" placeholder="MobileNumber" 
                    <?php
            if (isset($_GET['UserID'])) {
          ?>
            value="<?= $rowUser['MobileNumber'] ?>"

          <?php
          }
          ?>
          >
                  </div>
                  <div class="form-group">
          <label for="exampleInputEmail1">Enter Email Address</label>
                    <input type="Email" class="form-control" name="EmailAddress" placeholder="EmailAddress" 
                    <?php
            if (isset($_GET['UserID'])) {
          ?>
            value="<?= $rowUser['EmailAddress'] ?>"

          <?php
          }
          ?>
          >
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" rows="3" name="Address" placeholder="Enter Addrerss" >
                      <?php
                        if (isset($_GET['UserID'])) {
                        echo $rowUser['Address'];
                        }
                      ?>
                    </textarea>
                  </div>
                  <div class="form-group">
                    <label>Select City</label>
                      <select name="CityID" class="form-control">
                      <?php
                        include_once 'classes/City.php';
                        $objcity = new city();
                        $resultcity = $objcity->getAll($_GET);
                        foreach ($resultcity as $rowcity) {
                      ?>
                          <option value="<?php echo($rowcity['CityID']) ?>" 
                            <?php
                              if (isset($_GET['UserID']) &&  $rowcity['CityID']==$rowUser['CityID']) {
                                echo "selected";
                              }
                            ?>
                          ><?php echo($rowcity['CityName'])  ?></option>
                      <?php   
                        }
                      ?>
          
        </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
</body>
</html>