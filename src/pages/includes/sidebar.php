<?php 
   $uri = $_SERVER['REQUEST_URI'];     // /blog/admin/pages/admin/
   $array = explode('/', $uri);
   $key = array_search("pages", $array);
   $name = $array[$key + 1];
?>
<nav class="main-header navbar navbar-expand border-bottom navbar-dark bg-danger">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
      <a href="#" class="d-block"><b>Welcome : </b><?php echo $_SESSION['emp_name']; ?><b> - Your role :  </b><?php if($_SESSION['role']=="admin"){echo "Admin";}?><?php if($_SESSION['role']=="approval"){echo "Approval";}?><?php if($_SESSION['role']=="user"){echo "User";}?></a>
      </li>
    </ul>
</nav>
  <!-- /.navbar -->
<aside class="main-sidebar sidebar-dark-danger elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <center><?php echo $_SESSION['username']; ?></center>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         
        <?php if($_SESSION['role'] == 'admin') { ?>
          <li class="nav-header">Menu</li>
          <li class="nav-item">
            <a href="../user" class="nav-link <?php echo $name == 'user' ? 'active': '' ?>">
              <i class="far fa-address-card nav-icon"></i>
                <p>User Info</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="../item" class="nav-link <?php echo $name == 'item' ? 'active': '' ?>">
              <i class="fa fa-paperclip nav-icon"></i>
                <p>Item Info</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="../approve" class="nav-link <?php echo $name == 'approve' ? 'active': '' ?>">
              <i class="fa fa-check nav-icon"></i>
                <p>Approve Info</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="../history" class="nav-link <?php echo $name == 'history' ? 'active': '' ?>">
              <i class="fa fa-history nav-icon"></i>
                <p>History Info</p>
            </a>
          </li>
         
          <li class="nav-header">Account</li>
          <li class="nav-item">
            <a href="../../logout.php" class="nav-link">
              <i class="fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
          <?php } ?>


          <?php if($_SESSION['role'] == 'approval') { ?>
          <li class="nav-header">Menu</li>

          <li class="nav-item">
            <a href="../approve" class="nav-link <?php echo $name == 'approve' ? 'active': '' ?>">
              <i class="fa fa-check nav-icon"></i>
                <p>Approve Info</p>
            </a>
          </li>

          <li class="nav-header">Account</li>
          <li class="nav-item">
            <a href="../../logout.php" class="nav-link">
              <i class="fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
          <?php } ?>



          <?php if($_SESSION['role'] == 'user') { ?>
          <li class="nav-header">Menu</li>

          <li class="nav-item">
            <a href="../item" class="nav-link <?php echo $name == 'item' ? 'active': '' ?>">
              <i class="fa fa-paperclip nav-icon"></i>
                <p>Item Info</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="../history" class="nav-link <?php echo $name == 'history' ? 'active': '' ?>">
              <i class="fa fa-history nav-icon"></i>
                <p>History Info</p>
            </a>
          </li>

          <li class="nav-header">Account</li>
          <li class="nav-item">
            <a href="../../logout.php" class="nav-link">
              <i class="fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
          <?php } ?>

        </ul>
      </nav>





    </div>
    <!-- /.sidebar -->
</aside>