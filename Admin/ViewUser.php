<?php
	include_once 'header.php';
	include_once 'sidebar.php';
?>
	<?php
	include_once 'classes/User.php';
	$objUser = new User();
	if (isset($_GET['UserID'])) {
		$resultUser = $objUser->getByPK($_GET);
		$rowUser = $resultUser[0];
		if (!isset($rowUser)) {
			header('Location: ListUser.php');
			die();
		}
	}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Dashbord.php">Home</a></li>
              <li class="breadcrumb-item active">dashboard</li>
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
          <!-- left column -->
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary" >
              <div class="card-header">
                <h3 class="card-title">View</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
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
                    <input type="text" class="form-control" name="UserName" placeholder=" User Name" readonly
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
                    <input type="Password" class="form-control" name="Password" placeholder="Password" readonly 
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
                    <input type="text" class="form-control" name="FirstName" placeholder="FirstName" readonly
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
                    <input type="text" class="form-control" name="MiddleName" placeholder="MiddleName" readonly
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
                    <input type="text" class="form-control" name="LastName" placeholder="LastName" readonly
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
                    <input type="text" class="form-control" name="MobileNumber" placeholder="MobileNumber" readonly
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
                    <input type="Email" class="form-control" name="EmailAddress" placeholder="EmailAddress" readonly
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
                    <textarea class="form-control" rows="3" name="Address" placeholder="Enter Addrerss" readonly>
                      <?php
                        if (isset($_GET['UserID'])) {
                        echo $rowUser['Address'];
                        }
                      ?>
                    </textarea>
                  </div>
                  <div class="form-group">
                    <label>Select City</label>
                      <select name="CityID" class="form-control" disabled>
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
                  <a href="AddEditUser.php?UserID=<?= $rowUser['UserID'] ?>" class="btn btn-primary">Edit</a>
                  <a href="con_DeleteUser.php?UserID=<?= $rowUser['UserID'] ?>" class="btn btn-danger">Delete</a>
                </div>
            </div>
            <!-- /.card -->
          </div>
              
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<?php
	include_once 'footer.php';
?>