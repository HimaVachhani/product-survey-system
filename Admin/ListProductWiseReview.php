<?php  
  $page="productwisereview";  
	include_once 'Header.php';
	include_once 'Sidebar.php';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo ("list".$page) ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo ("list".$page) ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
            <div class="card table table-responsive">
              <div class="card-header">
                <a class="btn btn-warning" href="AddEditProductWiseReview.php">Add ProductWiseReview</a>

                <div class="card-tools">
                  <form>
                    <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="search" class="form-control float-right" placeholder="Search"
                    <?php if (isset($_GET['search'])) {
                      ?>
                      value="<?= $_GET['search'] ?>"
                      <?php
                    } ?>>

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class=" table table-hover" border="1">
					<tr align="center">
						<th>ProductWiseReviewId</th>
						<th>ProductName</th>
						<th>User Name</th>
						<th>Rating value</th>
						<th>Rating text</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
					<?php
					include_once 'classes/DBConfig.php'; 
					include_once 'classes/ProductWiseReview.php';
          $objProductWiseReview = new ProductWiseReview();
          if (!isset($_GET['ProductID'])) {
            $resultProductWiseReview = $objProductWiseReview->getAll($_GET);
          }
          else
          {
            $resultProductWiseReview = $objProductWiseReview->reviewproduct($_GET);
          }
					
					
					foreach ($resultProductWiseReview as $rowProductWiseReview) {
					?>

					<tr>
						<td><?= $rowProductWiseReview['ProductWiseReviewID'] ?></td>
						<td><?= $rowProductWiseReview['ProductName'] ?></td>
						<td><?= $rowProductWiseReview['UserName'] ?></td>
						<td><?= $rowProductWiseReview['RatingValue'] ?></td>
						<td><?= $rowProductWiseReview['RatingText'] ?></td>
						<td><a class="btn btn-primary" href="AddEditProductWiseReview.php?ProductWiseReviewID=<?php echo ($rowProductWiseReview['ProductWiseReviewID']) ?>">Edit</a></td>
						<td><a class="btn btn-danger" href="con_DeleteProductWiseReview.php?ProductWiseReviewID=<?php echo ($rowProductWiseReview['ProductWiseReviewID']) ?>">Delete</a></td>
					</tr>
					
					<?php	
					}
				 	?>
					</table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    </div>
</section>
</div>
<?php
	include_once 'Footer.php';
?>