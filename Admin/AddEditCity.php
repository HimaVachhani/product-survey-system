<?php   
	include_once 'Header.php';
	include_once 'Sidebar.php';
?>
<?php
	include_once 'classes/City.php';
	$objcity = new city();
	if (isset($_GET['CityID'])) {
		$resultcity = $objcity->getByPK($_GET);
		$rowcity = $resultcity[0];
		if (!isset($rowcity)) {
			header('Location: ListCity.php');
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
            if (isset($_GET['CityID'])) {
          echo "Edit";
          }
          else{
            echo "Add";
          }
          ?> City</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="ListCity.php">ListCity</a></li>
              <li class="breadcrumb-item active"><?php
            if (isset($_GET['CityID'])) {
          echo "Edit";
          }
          else{
            echo "Add";
          }
          ?> City</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <script type="text/javascript">
      function ValidCity() {
        var CityName=document.getElementById('CityName').value;
        var Err=document.getElementById('error');

        var pattern="^[A-Za-z&]{2,50}$";
        var reg=new RegExp(pattern);
        if (!reg.test(CityName)) {
          Err.innerHTML="invalid CityName";
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
                <h3 class="card-title"><?php
            if (isset($_GET['CityID'])) {
          echo "Edit";
          }
          else{
            echo "Add";
          }
          ?> City</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="con_AddEditCity.php" onsubmit="return ValidCity()">
                <div class="card-body">
                  <div class="form-group">
                  	<?php
						if (isset($_GET['CityID'])) {
					?>
						<input type="text" name="CityID" value="<?= $rowcity['CityID'] ?>" id="CityID" hidden>

					<?php
					}
					?>
                  	<div id="error" style="color: red" ></div>
                    <label for="exampleInputEmail1">City Name<b style="color: red">*</b></label>
                    
                    <input type="text" class="form-control" name="CityName" id="CityName" placeholder="Enter City" 
                    <?php
						if (isset($_GET['CityID'])) {
					?>
						value="<?= $rowcity['CityName'] ?>"

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