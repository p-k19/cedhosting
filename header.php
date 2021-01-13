<?php include_once 'user.php'?>
<!DOCTYPE HTML>
<html>
<head>
<title>Ced Hosting</title>
<!-- Latest compiled and minified CSS -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Planet Hosting Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!---fonts-->
<link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- custom css -->
<link rel="stylesheet" href="css/customcss.css">
<!-- custom css -->
<!-- fa fa cdn -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- fa fa cdn -->
 <!-- jquery cdn -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
  </script>
  <!-- jquery cdn -->
<!-- datatable cdn -->
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
  </script>
  <!-- datatable cdn -->
  <!-- datatable css -->
  <link rel="stylesheet" 
  href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
  </head>
<body>
<!---header--->
<div class="header">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <i class="sr-only">Toggle navigation</i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </button>				  
                    <div class="navbar-brand">
                        <h1><a href="index.php"><img src="images/logo.png"  alt="" width="100" height="90"></a>
                        <span style="color:purple;">Ced</span> <span style="color:Black;">Hosting</span></h1>
                        <!--<span style="color:purple;">Ced</span> <span style="color:Black;">Hosting</span>-->
                    </div>
                </div>

                         
                 <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class=active><a href="index.php">Home <i class="sr-only">(current)</i></a></li>
                            <li class=><a href="about.php">About</a></li>
                            <li class=><a href="services.php">Services</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Hosting<i class="caret"></i></a>
                                <ul class="dropdown-menu">
                                <?php
                                include 'product.php';
                                            $navobj = new product();
                                            $res = $navobj->hosting();
                                            $row = $res->num_rows;
                                            for($i=0;$i<$row;$i++){
                                                   $resultobj = $res->fetch_assoc();
                                                   ?>
                <li><a href="<?php echo $resultobj['link'];?>"> <?php  echo $resultobj['prod_name'];?></a></li>
                                                 
<?php
                                            }



                                                            
                                            ?>
                <!-- <li><a href="cmshosting.php">CMS Hosting</a></li>
                                    <li><a href="wordpresshosting.php">WordPress Hosting</a></li>
                                    <li><a href="catpage.php?id=26">Mac Hosting</a></li>
                                    <li><a href="windowshosting.php">windows hosting</a></li>
                                    <li><a href="linuxhosting.php">Linux Hosting</a></li> -->
                            
                                </ul>
                            </li>
                
                        <li class=><a href="pricing.php">Pricing</a></li>
                        <li class=><a href="blog.php">Blog</a></li>
                        <li class=><a href="contact.php">Contact</a></li>
                        <li class=><a href="cart.php" id="fa-fa-font-size"><i class="fa fa-shopping-cart"><span class="badge badge-info"></span></i></a></li>
                        <li class=><a href="login.php">Login</a></li>                    </ul>	
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
</div>