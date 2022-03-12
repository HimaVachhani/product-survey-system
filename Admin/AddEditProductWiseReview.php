<?php   
	include_once 'Header.php';
	include_once 'Sidebar.php';
?>
<?php
	include_once 'classes/ProductWiseReview.php';
	$objProductWiseReview = new ProductWiseReview();
	if (isset($_GET['ProductWiseReviewID'])) {
		$resultProductWiseReview = $objProductWiseReview->getByPK($_GET);
		$rowProductWiseReview = $resultProductWiseReview[0];
		if (!isset($rowProductWiseReview)) {
			header('Location: ListProductWiseReview.php');
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
            if (isset($_GET['ProductWiseReviewID'])) {
          echo "Edit";
          }
          else{
            echo "Add";
          }
          ?> ProductWiseReview</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="ListProductWiseReview.php">ListProductWiseReview</a></li>
              <li class="breadcrumb-item active"><?php
            if (isset($_GET['ProductWiseReviewID'])) {
          echo "Edit";
          }
          else{
            echo "Add";
          }
          ?> ProductWiseReview</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <script type="text/javascript">
      function ValidProductWiseReview() {
        var RatingValue=document.getElementById('RatingValue').value;
        var RatingText=document.getElementById('RatingText').value;
        var Err=document.getElementById('error');

        var pattern1="^[0-5]{0,1}$";
        var pattern2="^[A-Za-z0-9,.&% ]+$";
        var reg=new RegExp(pattern1);
        if (!reg.test(RatingValue)) {
          Err.innerHTML="invalid RatingValue";
          return false;
        }
        reg=new RegExp(pattern2);
        if (!reg.test(RatingText)) {
          Err.innerHTML="invalid RatingText";
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
                <h3 class="card-title">Add ProductWiseReview</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="con_AddEditProductWiseReview.php" onsubmit="return ValidProductWiseReview()">
                <div class="card-body">
                  <div id="error" style="color: red" ></div>
                  <div class="form-group">
                  	<?php
						if (isset($_GET['ProductWiseReviewID'])) {
					?>
						<input type="text" name="ProductWiseReviewID" value="<?= $rowProductWiseReview['ProductWiseReviewID'] ?>" hidden>

					<?php
					}
					?>
                    <div class="form-group"> 
                    <label>Select ProductID</label>
                      <select class="form-control" name="ProductID">
                        <?php
                          include_once 'classes/Product.php';
                          $objProduct = new Product();
                          $resultProduct = $objProduct->getAll($_GET);
                          foreach ($resultProduct as $rowProduct) {
                        ?>
                            <option value="<?php echo($rowProduct['ProductID']) ?>" 
                              <?php
                                if (isset($_GET['ProductWiseReviewID']) &&  $rowProduct['ProductID']==$rowProductWiseReview['ProductID']) {
                                  echo "selected";
                                }
                              ?>
                            ><?php echo($rowProduct['ProductName'])  ?></option>
                        <?php   
                          }
                        ?>
                        
                      </select>
                  </div>
                  <div class="form-group">
                    <label>Select User</label>
                      <select name="UserID" class="form-control">
                        <?php
                          include_once 'classes/User.php';
                          $objUser = new User();
                          $resultUser = $objUser->getAll($_GET);
                          foreach ($resultUser as $rowUser) {
                        ?>
                            <option value="<?php echo($rowUser['UserID']) ?>" 
                              <?php
                                if (isset($_GET['ProductWiseReviewID']) &&  $rowUser['UserID']==$rowProductWiseReview['UserID']) {
                                  echo "selected";
                                }
                              ?>
                            ><?php echo($rowUser['UserName'])  ?></option>
                        <?php   
                          }
                        ?>
                        
                      </select>
                  </div>
                 
                  	
                    <label for="exampleInputEmail1">Enter Rating Value<b style="color: red">*</b></label>
                    <input type="text" class="form-control" id="RatingValue" name="RatingValue" placeholder="Between 0 and 5" 
                    <?php
						if (isset($_GET['ProductWiseReviewID'])) {
					?>
						value="<?= $rowProductWiseReview['RatingValue'] ?>"

					<?php
					}
					?>required
					>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Enter Rating Text<b style="color: red">*</b></label>
                    <input type="text" class="form-control" id="RatingText" name="RatingText" placeholder="Comments" 
                    <?php
            if (isset($_GET['ProductWiseReviewID'])) {
          ?>
            value="<?= $rowProductWiseReview['RatingText'] ?>"

          <?php
          }
          ?>required
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