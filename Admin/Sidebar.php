  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="Dashbord.php" class="brand-link">
      <img src="./img/logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Product Survey System</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Tables
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="dashbord.php" class="nav-link <?php if($page=="dashbord"){ echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="ListCity.php" class="nav-link <?php if($page=="city"){ echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List City</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="ListAdmin.php" class="nav-link <?php if($page=="admin"){ echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="ListProduct.php" class="nav-link <?php if($page=="product"){ echo "active";} ?>" >
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="ListUser.php" class="nav-link <?php if($page=="user"){ echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="ListProductWiseReview.php" class="nav-link <?php if($page=="productwisereview"){ echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List ProductWiseReview</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>