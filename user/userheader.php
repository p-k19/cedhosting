<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Admin Dashboard</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  
  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
  
     
      <div class="sidenav-header  align-items-center">
      <h1><a href="index.php"><img src="logo.jpeg"  alt="" width="80" height="90"></a>
                        <span style="color:purple;">Ced</span> <span style="color:Black;">Hosting</span></h1>
        <a class="navbar-brand" href="javascript:void(0)">
        
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav" >
            <li class="nav-item">
              <a class="nav-link active" href="dashboard.php">
                <i class="ni ni-tv-2 text-primary"></i>
                Dashboard
              </a>
            </li>
        </ul>
        <ul class="list-unstyled ml-3">
        <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
           Products
          </h6>
          <li  data-toggle="collapse" 
          data-target="#products" class="collapsed active">
            <a href="#">Products <span class="fas">&#xf103;</span></a>
          </li>
          <ul class="navbar-nav sub-menu collapse" id="products">
            <li class="nav-item">
              <a class="nav-link" href="createcategory.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Create Category</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="addproduct.php">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Add Product</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="viewproducts.php">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">View Products</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/tables.html">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Create New Offers</span>
              </a>
            </li>
        </ul>
        <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            Orders
          </h6>
          <li  data-toggle="collapse" 
          data-target="#products1" class="collapsed active">
            <a href="#">Orders  <span class="fas">&#xf103;</span></a>
          </li>
          <ul class="navbar-nav sub-menu collapse" id="products1">
            <li class="nav-item">
              <a class="nav-link" href="examples/icons.html">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Pending Orders</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/map.html">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Completed Orders</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/profile.html">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Cancelled Orders</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/tables.html">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Generate Invoice</span>
              </a>
            </li>
        </ul>
        <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            Services
          </h6>
          <li  data-toggle="collapse" 
          data-target="#products2" class="collapsed active">
            <a href="#">Services  <span class="fas">&#xf103;</span></a>
          </li>
          <ul class="navbar-nav sub-menu collapse" id="products2">
            <li class="nav-item">
              <a class="nav-link" href="examples/icons.html">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Active Services</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/map.html">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Expired Services</span>
              </a>
            </li>
        </ul>
        <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            Users
          </h6>
          <li  data-toggle="collapse" 
          data-target="#products3" class="collapsed active">
            <a href="#">Users  <span class="fas">&#xf103;</span></a>
          </li>
          <ul class="navbar-nav sub-menu collapse" id="products3">
            <li class="nav-item">
              <a class="nav-link" href="examples/icons.html">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">All User List</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/map.html">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Create New User</span>
              </a>
            </li>
        </ul>
        <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
           Blog
          </h6>
          <li  data-toggle="collapse" 
          data-target="#products4" class="collapsed active">
            <a href="#">Blogs  <span class="fas">&#xf103;</span></a>
          </li>
          <ul class="navbar-nav sub-menu collapse" id="products4">
            <li class="nav-item">
              <a class="nav-link" href="examples/icons.html">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Add New Blog</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/map.html">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">View All Blogs</span>
              </a>
            </li>
        </ul>
        <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
          Accounts
          </h6>
          <li  data-toggle="collapse" 
          data-target="#products5" class="collapsed active">
            <a href="#">Account   <span class="fas">&#xf103;</span></a>
          </li>
          <ul class="navbar-nav sub-menu collapse" id="products5">
            <li class="nav-item">
              <a class="nav-link" href="examples/icons.html">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Update Company Info</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/map.html">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Change Security Ques</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/map.html">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Change Password</span>
              </a>
            </li>
        </ul>
        </ul>
        </div>
      </div>
    </div>
  </nav>