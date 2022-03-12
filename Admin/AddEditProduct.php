<?php   
	include_once 'Header.php';
	include_once 'Sidebar.php';
?>
<?php
	include_once 'classes/Product.php';
	$objProduct = new Product();
	if (isset($_GET['ProductID'])) {
		$resultProduct = $objProduct->getByPK($_GET);
		$rowProduct = $resultProduct[0];
		if (!isset($rowProduct)) {
			header('Location: ListProduct.php');
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
            if (isset($_GET['ProductID'])) {
          echo "Edit";
          }
          else{
            echo "Add";
          }
          ?> Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="ListProduct.php">ListProduct</a></li>
              <li class="breadcrumb-item active"><?php
            if (isset($_GET['ProductID'])) {
          echo "Edit";
          }
          else{
            echo "Add";
          }
          ?> Product</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <script type="text/javascript">
      function ValidProduct() {
        var ProductName=document.getElementById('ProductName').value;
        var ProductDescription=document.getElementById('ProductDescription').value;
        var ProductPrice=document.getElementById('ProductPrice').value;
        var Err=document.getElementById('error');

        var pattern1="^[A-Za-z0-9]{2,50}$";
        var pattern2="^[A-Za-z0-9,.&% ]+$";
        var pattern3="^[0-9]+[.]{0,1}[0-9]*$";
        var reg=new RegExp(pattern1);
        if (!reg.test(ProductName)) {
          Err.innerHTML="invalid Product Name";
          return false;
        }
        reg=new RegExp(pattern2);
        if (!reg.test(ProductDescription)) {
          Err.innerHTML="invalid Product Description";
          return false;
        }
        reg=new RegExp(pattern3);
        if (!reg.test(ProductPrice)) {
          Err.innerHTML="invalid ProductPrice";
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
                <h3 class="card-title">Add Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="con_AddEditProduct.php" method="post" enctype="multipart/form-data"  onsubmit="return ValidProduct()">
                <div class="card-body">
                  <div id="error" style="color: red" ></div>
                  <div class="form-group">
                  	<?php
          						if (isset($_GET['ProductID'])) {
          					?>
          						<input type="text" name="ProductID" value="<?= $rowProduct['ProductID'] ?>" hidden>
          					<?php
          					}
          					?>
                  	
                    <label for="exampleInputEmail1">Enter Product Name<b style="color: red">*</b></label>
                    <input type="text" class="form-control" name="ProductName" id="ProductName" placeholder=" Product Name" 
                    <?php
          						if (isset($_GET['ProductID'])) {
          					?>
          						value="<?= $rowProduct['ProductName'] ?>"

          					<?php
          					}
          					?>required
          					>
                  </div>
                  <div class="form-group">
                    <label>Enter Product Discription<b style="color: red">*</b></label>
                    <textarea class="form-control" rows="3" cols="50" id="ProductDescription" name="ProductDescription" required>
                      <?php
                        if (isset($_GET['ProductID'])) {
                        echo $rowProduct['ProductDescription'];
                        }
                      ?>
                    </textarea>
                  </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Enter Product Price<b style="color: red">*</b></label>
                    <input type="text" class="form-control" name="ProductPrice" id="ProductPrice" placeholder="price" 
                    <?php
            if (isset($_GET['ProductID'])) {
          ?>
            value="<?= $rowProduct['ProductPrice'] ?>"

          <?php
          }
          ?> required
          >
                  </div>
                 <div class="form-group">
                    <label>Select Product Image<b style="color: red">*</b></label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="form-control" name="ProductImage">
                      </div>
                    </div>
                  </div>
                  <?php
                    if (isset($_GET['ProductID'])) {
                      ?>
                        <div class="form-group">
                    <label>Selected Product Image</label>
                    <div class="input-group">
                      <img class="img img-responsive" style="width: 200px" src="<?= $rowProduct['ProductImage']; ?>">
                      &nbsp;
                          <?= $rowProduct['ProductImage']; ?>
                    </div>
                  </div>
                  <?php  
                    }
                  ?>
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