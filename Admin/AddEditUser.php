<?php   
	include_once 'Header.php';
	include_once 'Sidebar.php';
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
            <h1 class="m-0 text-dark"><?php
            if (isset($_GET['UserID'])) {
          echo "Edit";
          }
          else{
            echo "Add";
          }
          ?> User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="ListUser.php">ListUser</a></li>
              <li class="breadcrumb-item active"><?php
            if (isset($_GET['UserID'])) {
          echo "Edit";
          }
          else{
            echo "Add";
          }
          ?> User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <script type="text/javascript">
      function ValidUser() {
        var UserName=document.getElementById('UserName').value;
        var Password=document.getElementById('Password').value;
        var FirstName=document.getElementById('FirstName').value;
        var MiddleName=document.getElementById('MiddleName').value;
        var LastName=document.getElementById('LastName').value;
        var MobileNumber=document.getElementById('MobileNumber').value;
        var EmailAddress=document.getElementById('EmailAddress').value;
        var Address=document.getElementById('Address').value;
        var Err=document.getElementById('error');

        var pattern1="^[A-Za-z_]{2,50}$";
        var pattern2="^[A-Za-z0-9,.&% @?:]+$";
        var pattern2="^[A-Za-z0-9,.&%#*^?@]+$";
        var mob="^[0-9,]{10,25}$";
        var email="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$";
        var reg=new RegExp(pattern1);
        if (!reg.test(UserName)) {
          Err.innerHTML="invalid User Name";
          return false;
        }
         reg=new RegExp(pattern1);
        if (!reg.test(FirstName)) {
          Err.innerHTML="invalid First Name";
          return false;
        }
         reg=new RegExp(pattern1);
        if (!reg.test(MiddleName)) {
          Err.innerHTML="invalid Middle Name";
          return false;
        }
         reg=new RegExp(pattern1);
        if (!reg.test(LastName)) {
          Err.innerHTML="invalid Last Name";
          return false;
        }
        reg=new RegExp(pattern3);
        if (!reg.test(Password)) {
          Err.innerHTML="invalid Password";
          return false;
        }
        reg=new RegExp(mob);
        if (!reg.test(MobileNumber)) {
          Err.innerHTML="invalid Mobile Number";
          return false;
        }
        reg=new RegExp(email);
        if (!reg.test(EmailAddress)) {
          Err.innerHTML="invalid Email Address";
          return false;
        }
        reg=new RegExp(pattern2);
        if (!reg.test(Address)) {
          Err.innerHTML="invalid Address";
          return false;
        }
      }
    </script>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      	<div class="row">
          <!-- left column -->
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary" >
              <div class="card-header">
                <h3 class="card-title">
                   <?php
            if (isset($_GET['UserID'])) {
              echo "Edit User";
            }
            else{
              echo "Add User";
            }
          ?>
                </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="con_AddEditUser.php"  onsubmit="return ValidUser()">
                <div class="card-body">
                  <div id="error" style="color: red" ></div>
                  <div class="form-group">
                  	<?php
						if (isset($_GET['UserID'])) {
					?>
						<input type="text" name="UserID" value="<?= $rowUser['UserID'] ?>" hidden>

					<?php
					}
					?>
                  	
                    <label for="exampleInputEmail1">Enter User Name<b style="color: red">*</b></label>
                    <input type="text" class="form-control" id="UserName" name="UserName" placeholder=" User Name" 
                    <?php
						if (isset($_GET['UserID'])) {
					?>
						value="<?= $rowUser['UserName'] ?>"

					<?php
					}
					?>required
					>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Enter User Password<b style="color: red">*</b></label>
                    <input type="Password" class="form-control" id="Password" name="Password" placeholder="Password" 
                    <?php
                      if (isset($_GET['UserID'])) {
                    ?>
                      value="<?= $rowUser['Password'] ?>"

                    <?php
                    }
                    ?>required
                     >
                  </div>
                  <div class="form-group">
                    <label> Enter Full Name<b style="color: red">*</b></label>
                <div class="row">
                  <div class="col-4">
                    <input type="text" class="form-control" id="FirstName" name="FirstName" placeholder="FirstName"
                    <?php
                      if (isset($_GET['UserID'])) {
                    ?>
                      value="<?= $rowUser['FirstName'] ?>"

                    <?php
                    }
                    ?>required
                    >
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" id="MiddleName" name="MiddleName" placeholder="MiddleName"
                    <?php
                      if (isset($_GET['UserID'])) {
                    ?>
                      value="<?= $rowUser['MiddleName'] ?>"

                    <?php
                    }
                    ?>required
                    >
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" id="LastName" name="LastName" placeholder="LastName"
                    <?php
                      if (isset($_GET['UserID'])) {
                    ?>
                      value="<?= $rowUser['LastName'] ?>"

                    <?php
                    }
                    ?>required
                    >
                  </div>
                </div>
              <!-- /.card-body -->
            </div>
                  <div class="form-group">
          <label for="exampleInputEmail1">Enter Mobile Number<b style="color: red">*</b></label>
                    <input type="text" class="form-control" id="MobileNumber" name="MobileNumber" placeholder="MobileNumber" 
                    <?php
            if (isset($_GET['UserID'])) {
          ?>
            value="<?= $rowUser['MobileNumber'] ?>"

          <?php
          }
          ?>required
          >
                  </div>
                  <div class="form-group">
          <label for="exampleInputEmail1">Enter Email Address<b style="color: red">*</b></label>
                    <input type="Email" class="form-control" id="EmailAddress" name="EmailAddress" placeholder="EmailAddress" 
                    <?php
            if (isset($_GET['UserID'])) {
          ?>
            value="<?= $rowUser['EmailAddress'] ?>"

          <?php
          }
          ?>required
          >
                  </div>
                  <div class="form-group">
                    <label>Address<b style="color: red">*</b></label>
                    <textarea class="form-control" rows="3" id="Address" name="Address" placeholder="Enter Addrerss" required>
                      <?php
                        if (isset($_GET['UserID'])) {
                        echo $rowUser['Address'];
                        }
                      ?>
                    </textarea>
                  </div>
                  <div class="form-group">
                    <label>Select City<b style="color: red">*</b></label>
                      <select name="CityID" class="form-control" required>
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
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<?php
	include_once 'Footer.php';
?>