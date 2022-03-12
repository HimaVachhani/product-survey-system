<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,800" rel="stylesheet" media="screen">

  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="css/style.css" rel="stylesheet" media="screen">
  <link href="color/default.css" rel="stylesheet" media="screen">
</head>
<body class="card-title" style="background-color:gray">
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
                    <label for="exampleInputEmail1">Enter User Name</label>
                    <input type="text" class="form-control" name="UserName" placeholder=" User Name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Enter User Password</label>
                    <input type="Password" class="form-control" name="Password" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label> Enter Full Name</label>
                <div class="row">
                  <div class="col-4">
                    <input type="text" class="form-control" name="FirstName" placeholder="FirstName">
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" name="MiddleName" placeholder="MiddleName">
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" name="LastName" placeholder="LastName">
                  </div>
                </div>
              <!-- /.card-body -->
            </div>
                  <div class="form-group">
          <label for="exampleInputEmail1">Enter Mobile Number</label>
                    <input type="text" class="form-control" name="MobileNumber" placeholder="MobileNumber">
                  </div>
                  <div class="form-group">
          <label for="exampleInputEmail1">Enter Email Address</label>
                    <input type="Email" class="form-control" name="EmailAddress" placeholder="EmailAddress" >
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" rows="3" name="Address" placeholder="Enter Addrerss" >
                    </textarea>
                  </div>
                  <div class="form-group">
                    <label>Select City</label>
                      <select name="CityID" class="form-control">
                        <option value="">--Select--</option>
                      <?php
                        include_once '../admin/classes/City.php';
                        $objcity = new city();
                        $resultcity = $objcity->getAll($_GET);
                        foreach ($resultcity as $rowcity) {
                      ?>
                          <option value="<?php echo($rowcity['CityID']) ?>" 
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