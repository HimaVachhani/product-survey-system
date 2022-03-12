<?php   
	include_once 'Header.php';
	include_once 'Sidebar.php';
?>
<?php
	include_once 'classes/Admin.php';
	$objAdmin = new Admin();
	if (isset($_GET['AdminID'])) {
		$resultAdmin = $objAdmin->getByPK($_GET);
		$rowAdmin = $resultAdmin[0];
		if (!isset($rowAdmin)) {
			header('Location: ListAdmin.php');
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
            if (isset($_GET['AdminID'])) {
          echo "Edit";
          }
          else{
            echo "Add";
          }
          ?> Admin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="ListAdmin.php">ListAdmin</a></li>
              <li class="breadcrumb-item active"><?php
            if (isset($_GET['AdminID'])) {
          echo "Edit";
          }
          else{
            echo "Add";
          }
          ?> Admin</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      	<div class="row">
          <!-- left column -->
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Admin</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="con_AddEditAdmin.php" onsubmit="return ValidAdmin()">
                <div class="card-body">
                  <div id="error" style="color: red" ></div>
                  <div class="form-group">
                  	<?php
						if (isset($_GET['AdminID'])) {
					?>
						<input type="text" name="AdminID" value="<?= $rowAdmin['AdminID'] ?>" hidden>

					<?php
					}
					?>
                  	
                    <label for="exampleInputEmail1">Enter Admin Name<b style="color: red">*</b></label>
                    <input type="text" class="form-control" name="AdminName" id="AdminName" placeholder=" Admin Name" 
                    <?php
						if (isset($_GET['AdminID'])) {
					?>
						value="<?= $rowAdmin['AdminName'] ?>"

					<?php
					}
					?> required
					>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Enter Admin Password<b style="color: red">*</b></label>
                    <input type="Password" class="form-control" name="AdminPassword" id="AdminPassword" placeholder="Password" 
                    <?php
            if (isset($_GET['AdminID'])) {
          ?>
            value="<?= $rowAdmin['AdminPassword'] ?>"

          <?php
          }
          ?> required
          >
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