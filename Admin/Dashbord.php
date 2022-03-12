<?php 
	$page="dashbord";  
	include_once 'Header.php';
	include_once 'Sidebar.php';
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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4">
          <?php
          include_once 'classes/Product.php';
            $objProduct = new Product();
            $resultProduct =$objProduct->count($_GET);
            $rowProduct = $resultProduct[0];
          ?>
          <h1 align="center">Total Product Count</h1>
          <h1 align="center"><?= $rowProduct['totalcount']; ?></h1>
        </div>
        <div class="col-sm-4">
          <?php
          include_once 'classes/ProductWiseReview.php';
            $objProduct = new ProductWiseReview();
            $resultProduct =$objProduct->reviewcount();
            $rowProduct = $resultProduct[0];
          ?>
          <h1 align="center">Reviewed Product Count</h1>
          <h1 align="center"><?= $rowProduct['reviewcount']; ?></h1>
        </div>
        <div class="col-sm-4">
          <?php
          include_once 'classes/ProductWiseReview.php';
            $resultProduct =$objProduct->avgrating();
            $rowProduct = $resultProduct[0];
          ?>
          <h1 align="center">Avg. rating of all products</h1>
          <h1 align="center"><?= $rowProduct['avgrating']; ?></h1>
        </div>
      </div>
    </div>

    <!-- Main content -->
</div>
<?php
	include_once 'Footer.php';
?>