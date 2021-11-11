<?php 
include 'lib/db.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
 
  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Nayon Talukder">
    
    <link rel="stylesheet" type="text/css" href="assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/jquery-minicolors/jquery.minicolors.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/quill/dist/quill.snow.css">

    <link href="dist/css/icons/font-awesome/css/fontawesome.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/mainstyle.css" rel="stylesheet">
    
    
    <link href="dist/css/custom.css" rel="stylesheet">
     <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="image/logo.png">
    <title>Nogor-Curiar Service::Mercent dashbord.</title>
    <!-- Custom CSS -->
    
     <link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet"> 
</head>
<style>
.light-logo{
    height: 70px;
}    
</style>
<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="fa fa-bars ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        
                       <b class="logo-icon"> 
                              
                           <a href="dashbord.php"><img src="image/logo-light.png" alt="homepage" class="light-logo" /> </a>
                        </b>
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-ellipsis-h"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                      <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="fa fa-bars font-24"></i></a></li> 
                        
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <!--<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><button class="btn btn-warning">Create New Order</button></a>
                           
                        </li>-->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border:1px solid var(--mani);">
                            <img src="../admin/curiarboyProfile/profile/<?php echo $_SESSION['profile']?>" class="rounded-circle" width="50" height="50"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                               
                                <a class="dropdown-item" href="payment-histry.php"><i class="ti-wallet m-r-5 m-l-5"></i> Financial Dashboard</a>
                                <div class="dropdown-divider"></div>
                                <div class="dropdown-divider"></div>
                                <div class="p-l-30 p-10"><a href="logout.php" class="btn btn-sm btn-danger btn-rounded">Log Out</a></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashbord.php" aria-expanded="false"><i class="fa fa-th-large"></i><span class="hide-menu">Dashboard</span></a></li>
                        
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-truck"></i>&nbsp; <span class="hide-menu">Pickup Center </span></a>
                            
                            <ul aria-expanded="false" class="collapse  first-level">
                               <li class="sidebar-item"><a href="today-pikup.php" class="sidebar-link"><i class="fa fa-truck"></i><span class="hide-menu"> Today Pickup </span></a></li>
                                <li class="sidebar-item"><a href="pickup-order.php" class="sidebar-link"><i class="fa fa-truck"></i><span class="hide-menu"> Pickup Order </span></a></li>
                                
                                <li class="sidebar-item"><a href="pickup-order-histry.php" class="sidebar-link"><i class="fa fa-list"></i><span class="hide-menu"> Pickup Order Histry </span></a></li>
                            </ul>
                        </li>
                        
                        
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-truck"></i>&nbsp;<span class="hide-menu">Delivery Center </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="delivery-order.php" class="sidebar-link"><i class="fas fa-shipping-fast"></i><span class="hide-menu"> Delivery Order </span></a></li>
                                
                                <li class="sidebar-item"><a href="delivery-order-histry.php" class="sidebar-link"><i class="fa fa-list"></i><span class="hide-menu"> Delivery Order Histry </span></a></li>
                            </ul>
                        </li>
                        
                        
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="deposit.php" aria-expanded="false"><i class="fas fa-donate"></i><span class="hide-menu">Deposit Fund</span></a></li>

                        
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="withdraw.php" aria-expanded="false"><i class="fa fa-credit-card"></i><span class="hide-menu">Cash Withdraw </span></a></li>
                        
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="re-set-pass.php" aria-expanded="false"><i class="fa fa-lock"></i><span class="hide-menu">Re-Set Password</span></a></li>
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        
        