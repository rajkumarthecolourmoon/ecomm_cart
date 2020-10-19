<!DOCTYPE html>
<html lang="en">

<head>
    <title>Administrator - Login</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" href="<?php echo base_url(); ?>admincss/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" 
    href="<?php echo base_url(); ?>admincss/bower_components//bootstrap/dist/css/bootstrap.min.css">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" 
    href="<?php echo base_url(); ?>admincss/assets/icon/themify-icons/themify-icons.css">
     <link rel="stylesheet" type="text/css" 
     href="<?php echo base_url(); ?>admincss/assets/css/bootstrap.icon-large.css">
     <link rel="stylesheet" type="text/css" 
     href="<?php echo base_url(); ?>admincss/css/bootstrap.icon-large.min.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" 
    href="<?php echo base_url(); ?>admincss/assets/icon/icofont/css/icofont.css">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" 
    href="<?php echo base_url(); ?>admincss/assets/pages/flag-icon/flag-icon.min.css">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" 
    href="<?php echo base_url(); ?>admincss/assets/pages/menu-search/css/component.css">
    <!-- Horizontal-Timeline css -->
    <link rel="stylesheet" type="text/css"
    href="<?php echo base_url(); ?>admincss/assets/pages/dashboard/horizontal-timeline/css/style.css">
    <!-- amchart css -->
    <link rel="stylesheet" type="text/css" 
    href="<?php echo base_url(); ?>admincss/assets/pages/dashboard/amchart/css/amchart.css">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" 
    href="<?php echo base_url(); ?>admincss/assets/pages/flag-icon/flag-icon.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" 
    href="<?php echo base_url(); ?>admincss/assets/css/style.css">
    <!--color css-->
    <link rel="stylesheet" type="text/css" 
    href="<?php echo base_url(); ?>admincss/assets/css/color/color-2.css" id="color"/>
    <script src="http://cdn.ckeditor.com/4.7.1/full/ckeditor.js"></script>
</head>
<body class="vertical-static">
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div></div>
        </div>
    </div>

<body class="horizontal-static">
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div></div>
        </div>
    </div>

    <nav class="navbar header-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-logo">
                <a class="mobile-menu" id="mobile-collapse" href="#!">
                    <i class="ti-menu"></i>
                </a>
                <a class="mobile-search morphsearch-search" href="#">
                    <i class="ti-search"></i>
                </a>
                <a href="<?php echo base_url(); ?>">
                 <?php if($this->session->userdata('image') != ""){ ?>
                <img src="<?php //echo base_url(); ?>assets/images/<?php echo $this->session->userdata('site_logo'); ?>" alt="Site Logo" class="img-fluid" style="width: auto; height: 30px;" >
                    <?php }else{ ?>
                         <img class="img-fluid" src="<?php echo base_url(); ?>admintemplate/assets/images/logo.png" alt="Theme-Logo" />
                    <?php } ?>

                   
                </a>
                <a class="mobile-options">
                    <i class="ti-more"></i>
                </a>
            </div>
            <div class="navbar-container container-fluid">
                <div>
                    <ul class="nav-left">
                        <li>
                            <a id="collapse-menu" href="#">
                                <i class="ti-menu"></i>
                            </a>
                        </li>
                        <li>
                            <a class="main-search morphsearch-search" href="#">
                                <!-- themify icon -->
                                <i class="ti-search"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#!" onclick="javascript:toggleFullScreen()">
                                <i class="ti-fullscreen"></i>
                            </a>
                        </li>
                        <!-- <li class="mega-menu-top">
                            <a href="#">
              Mega
              <i class="ti-angle-down"></i>
            </a>
                            <ul class="show-notification row">
                                <li class="col-sm-3">
                                    <h6 class="mega-menu-title">Popular Links</h6>
                                    <ul class="mega-menu-links">
                                        <li><a href="form-elements-component.html">Form Elements</a></li>
                                        <li><a href="button.html">Buttons</a></li>
                                        <li><a href="map-google.html">Maps</a></li>
                                        <li><a href="user-card.html">Contact Cards</a></li>
                                        <li><a href="user-profile.html">User Information</a></li>
                                        <li><a href="auth-lock-screen.html">Lock Screen</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <h6 class="mega-menu-title">Mailbox</h6>
                                    <ul class="mega-mailbox">
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left">
                                                    <i class="ti-folder"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h5>Data Backup</h5>
                                                    <small class="text-muted">Store your data</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left">
                                                    <i class="ti-headphone-alt"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h5>Support</h5>
                                                    <small class="text-muted">24-hour support</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left">
                                                    <i class="ti-dropbox"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h5>Drop-box</h5>
                                                    <small class="text-muted">Store large amount of data in one-box only
                                                    </small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left">
                                                    <i class="ti-location-pin"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h5>Location</h5>
                                                    <small class="text-muted">Find Your Location with ease of use</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <h6 class="mega-menu-title">Gallery</h6>
                                    <div class="row m-b-20">
                                        <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="<?php //echo base_url(); ?>admintemplate/assets/images/mega-menu/01.jpg" alt="Gallery-1">
                                        </div>
                                        <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="<?php //echo base_url(); ?>admintemplate/assets/images/mega-menu/02.jpg" alt="Gallery-2">
                                        </div>
                                        <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="<?php //echo base_url(); ?>admintemplate/assets/images/mega-menu/03.jpg" alt="Gallery-3">
                                        </div>
                                    </div>
                                    <div class="row m-b-20">
                                        <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="<?php //echo base_url(); ?>admintemplate/assets/images/mega-menu/04.jpg" alt="Gallery-4">
                                        </div>
                                        <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="<?php //echo base_url(); ?>admintemplate/assets/images/mega-menu/05.jpg" alt="Gallery-5">
                                        </div>
                                        <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="<?php //echo base_url(); ?>admintemplate/assets/images/mega-menu/06.jpg" alt="Gallery-6">
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-sm btn-block">Browse Gallery</button>
                                </li>
                                <li class="col-sm-3">
                                    <h6 class="mega-menu-title">Contact Us</h6>
                                    <div class="mega-menu-contact">
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-3 col-form-label">Name</label>
                                            <div class="col-9">
                                                <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-search-input" class="col-3 col-form-label">Email</label>
                                            <div class="col-9">
                                                <input class="form-control" type="email" placeholder="Enter your E-mail Id" id="example-search-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-search-input" class="col-3 col-form-label">Contact</label>
                                            <div class="col-9">
                                                <input class="form-control" type="number" placeholder="+91-9898989898" id="example-search-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleTextarea" class="col-3 col-form-label">Message</label>
                                            <div class="col-9">
                                                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li> -->
                    </ul>
                    <ul class="nav-right">
                       <!--  <li class="header-notification lng-dropdown">
                            <a href="#" id="dropdown-active-item">
                                <i class="flag-icon flag-icon-gb m-r-5"></i> English
                            </a>
                            <ul class="show-notification">
                                <li>
                                    <a href="#" data-lng="en">
                                        <i class="flag-icon flag-icon-gb m-r-5"></i> English
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-lng="es">
                                        <i class="flag-icon flag-icon-es m-r-5"></i> Spanish
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-lng="pt">
                                        <i class="flag-icon flag-icon-pt m-r-5"></i> Portuguese
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-lng="fr">
                                        <i class="flag-icon flag-icon-fr m-r-5"></i> French
                                    </a>
                                </li>
                            </ul>
                        </li> -->
                        <!-- <li class="header-notification">
                            <a href="#!">
                                <i class="ti-bell"></i>
                                <span class="badge">5</span>
                            </a>
                            <ul class="show-notification">
                                <li>
                                    <h6>Notifications</h6>
                                    <label class="label label-danger">New</label>
                                </li>
                                <li>
                                    <div class="media">
                                        <img class="d-flex align-self-center" src="<?php //echo base_url(); ?>admintemplate/assets/images/user.png" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="notification-user">John Doe</h5>
                                            <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                            <span class="notification-time">30 minutes ago</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li> -->
                        <!-- <li class="header-notification">
                            <a href="#!" class="displayChatbox">
                                <i class="ti-comments"></i>
                                <span class="badge">9</span>
                            </a>
                        </li> -->
                         
                        <li class="user-profile header-notification">
                            <a href="#!">
                                <img src="assets/images/user.png" alt="User-Profile-Image">
                                <span>John Doe</span>
                                <i class="ti-angle-down"></i>
                            </a>
                            <ul class="show-notification profile-notification">
                                <li>
                                    <a href="#!">
                                        <i class="ti-settings"></i> Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="user-profile.html">
                                        <i class="ti-user"></i> Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="email-inbox.html">
                                        <i class="ti-email"></i> My Messages
                                    </a>
                                </li>
                                <li>
                                    <a href="auth-lock-screen.html">
                                        <i class="ti-lock"></i> Lock Screen
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <i class="ti-layout-sidebar-left"></i> Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                  
                </div>
            </div>
        </div>
    </nav>
    <!-- Menu header end -->
<style type="text/css">
    .nav-left-new {
    display: flex;
    float: left;
}
.nav-left-new > li {
    padding: 0 45px 0 0;
}
.nav-left-new a {
    color: #ffffff;
}
.nav-left-new a:hover {
    color: rgb(26,188,156);
}
</style>  



<!-- <?php
// if ($this->session -> userdata('email') == "" && $this->session -> userdata('login') != true && $this->session -> userdata('role_id') != 1) {
     // redirect('administrator/index');
    //}
 ?> -->

     <!-- Menu aside start -->
    <div class="main-menu">
        <div class="main-menu-header">
                    <ul class="nav-left-new">
                        <li>
                            <a id="collapse-menu" href="#">
                                <i class="ti-home"></i>
                            </a>
                        </li>
                        <li>
                            <a class="main-search morphsearch-search" href="#">
                                <i class="ti-user   "></i>
                            </a>
                        </li>
                        <li>
                            <a class="main-search morphsearch-search" href="#">
                                <i class="ti-settings"></i>
                            </a>
                        </li>
                        <li>
                            <a class="main-search morphsearch-search" href="#">
                                <i class="ti-email"></i>
                            </a>
                        </li>
                   
                    </ul>
        </div>
        <div class="main-menu-content">
            <ul class="main-navigation">
             <li class="nav-item has-class">
                    <a href="<?php //echo base_url(); ?>">
                        <i class="ti-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
             
                <li class="nav-item">
                    <a href="#!">
                        <i class="ti-layout"></i>
                        <span>Users</span>
                    </a>
                    <ul class="tree-1">
                        <li><a href="<?php //echo base_url(); ?>">Add User</a></li>
                        <li><a href="<?php //echo base_url(); ?>">Users</a></li>
                    </ul>
                </li>
                    <li class="nav-item">
                        <a href="#!">
                            <i class="ti-layers"></i>
                            <span>Blogs</span>
                        </a>
                        <ul class="tree-1">
                            <li class="nav-sub-item"><a href="#">Blogs</a>
                                <ul class="tree-2">
                                    <li><a href="<?php //echo base_url(); ?>">Add Blogs</a></li>
                                    <li><a href="<?php //echo base_url(); ?>">List Blogs</a></li>
                                </ul>
                            </li>
                           <li><a href="<?php //echo base_url(); ?>">Comments</a></li>
                        </ul>

                    </li>
                    <li class="nav-item">
                        <a href="#!">
                            <i class="ti-pencil-alt"></i>
                            <span>Products</span>
                        </a>
                        <ul class="tree-1">
                           
                            <li class="nav-sub-item"><a href="#">Category</a>
                                <ul class="tree-2">
                                    <li><a href="<?php //echo base_url(); ?>">Add Category</a></li>
                                    <li><a href="<?php //echo base_url(); ?>">List Category</a></li>
                                </ul>
                            </li>
                            <li class="nav-sub-item"><a href="#">Products</a>
                                <ul class="tree-2">
                                    <li><a href="<?php //echo base_url(); ?>">Add Products</a></li>
                                    <li><a href="<?php //echo base_url(); ?>">List Products</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#!">
                            <i class="ti-write"></i>
                            <span>FAQ</span>
                        </a>
                        <ul class="tree-1">
                            <li class="nav-sub-item"><a href="#">FAQ Category</a>
                                <ul class="tree-2">
                                    <li><a href="<?php //echo base_url(); ?>">Add FAQ Category</a></li>
                                    <li><a href="<?php //echo base_url(); ?>">List FAQ Category </a></li>
                                </ul>
                            </li>
                            <li class="nav-sub-item"><a href="#">FAQ</a>
                                <ul class="tree-2">
                                    <li><a href="<?php //echo base_url(); ?>">Add FAQ</a></li>
                                    <li><a href="<?php //echo base_url(); ?>">List FAQ</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                
                    <li class="nav-item">
                        <a href="#!">
                            <i class="ti-settings"></i>
                            <span>Site Configuration</span>
                        </a>
                        <ul class="tree-1">
                            <li><a href="<?php //echo base_url(); ?>">Site Configuration</a></li>
                            <li><a href="<?php //echo base_url(); ?>">SCO</a></li>
                            <li> <a href="<?php //echo base_url(); ?>">Social Links</a></li>
                            <li> <a href="<?php //echo base_url(); ?>">Page Contents</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#!">
                            <i class="ti-layout-slider"></i>
                            <span data-i18n="nav.basic-components.main">Sliders</span>
                        </a>
                        <ul class="tree-1">
                            <li><a href="<?php //echo base_url(); ?>" data-i18n="nav.basic-components.alert">Add slider</a></li>
                            <li><a href="<?php //echo base_url(); ?>" data-i18n="nav.basic-components.breadcrumbs">List slider</a></li>
                        </ul>
                    </li>
                     <li class="nav-item">
                        <a href="#!">
                            <i class="ti-layout-slider"></i>
                            <span data-i18n="nav.basic-components.main">Gallery</span>
                        </a>
                        <ul class="tree-1">
                            <li><a href="<?php //echo base_url(); ?>" data-i18n="nav.basic-components.alert">Add Gallery</a></li>
                            <li><a href="<?php //echo base_url(); ?>" data-i18n="nav.basic-components.breadcrumbs">List Gallery</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#!">
                            <i class="ti-layout-grid2-thumb"></i>
                            <span data-i18n="nav.basic-components.main">Teams</span>
                        </a>
                        <ul class="tree-1">
                            <li><a href="<?php //echo base_url(); ?>" data-i18n="nav.basic-components.alert">Add Team</a></li>
                            <li><a href="<?php //echo base_url(); ?>" data-i18n="nav.basic-components.breadcrumbs">List Teams</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#!">
                            <i class="ti-direction-alt"></i>
                            <span data-i18n="nav.basic-components.main">Testimonials</span>
                        </a>
                        <ul class="tree-1" style="display: none;">
                            <li><a href="<?php //echo base_url(); ?>" data-i18n="nav.basic-components.alert">Add Testimonial</a></li>
                            <li><a href="<?php //echo base_url(); ?>" data-i18n="nav.basic-components.breadcrumbs">List Testimonials</a></li>
                        </ul>
                    </li>
            </ul>
        </div>
    </div>
    <!-- Menu aside end -->
     <!-- Main-body start -->
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->

  <?php if($this->session->flashdata('success')): ?>
      <?php echo '<div class="alert alert-success icons-alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="icofont icofont-close-line-circled"></i>
                </button>
                <p><strong>Success! &nbsp;&nbsp;</strong>'.$this->session->flashdata('success').'</p></div>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('danger')): ?>
      <?php echo '<div class="alert alert-danger icons-alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="icofont icofont-close-line-circled"></i>
                </button>
                <p><strong>Error! &nbsp;&nbsp;</strong>'.$this->session->flashdata('danger').'</p></div>'; ?>
    <?php endif; ?>

     <?php if(validation_errors() != null): ?>
      <?php echo '<div class="alert alert-warning icons-alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="icofont icofont-close-line-circled"></i>
                </button>
                <p><strong>Alert! &nbsp;&nbsp;</strong>'.validation_errors().'</p></div>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('match_old_password')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('match_old_password').'</p>'; ?>
    <?php endif; ?> 

                 
            <div class="page-header">
                <div class="page-header-title">
                    <h4>Dashboard</h4>
                </div>
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index-2.html">
                                <i class="icofont icofont-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Pages</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="page-body">
                <div class="row">
                    <div class="col-md-12 col-xl-4">
                        <!-- table card start -->
                        <div class="card table-card">
                            <div class="">
                                <div class="row-table">
                                    <div class="col-sm-6 card-block-big br">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <i class="icofont icofont-eye-alt text-success"></i>
                                            </div>
                                            <div class="col-sm-8 text-center">

                                                <h5>  <?php //($count_users); ?></h5>
                                                <span>Visitors</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 card-block-big">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <i class="icofont icofont-ui-music text-danger"></i>
                                            </div>
                                            <div class="col-sm-8 text-center">
                                                <h5>100%</h5>
                                                <span>Volume</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="row-table">
                                    <div class="col-sm-6 card-block-big br">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <i class="icofont icofont-files text-info"></i>
                                            </div>
                                            <div class="col-sm-8 text-center">  
                                                <h5>2000 +</h5>
                                                <span>Files</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 card-block-big">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <i class="icofont icofont-envelope-open text-warning"></i>
                                            </div>
                                            <div class="col-sm-8 text-center">
                                                <h5>120</h5>
                                                <span>Mails</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- table card end -->
                    </div>
                    <div class="col-md-12 col-xl-4">
                        <!-- table card start -->
                        <div class="card table-card">
                            <div class="">
                                <div class="row-table">
                                    <div class="col-sm-6 card-block-big br">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div id="barchart" style="height:40px;width:40px;"></div>
                                            </div>
                                            <div class="col-sm-8 text-center">
                                                <h5>1000</h5>
                                                <span>Shares</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 card-block-big">
                                        <div class="row ">
                                            <div class="col-sm-4">
                                                <i class="icofont icofont-network text-primary"></i>
                                            </div>
                                            <div class="col-sm-8 text-center">
                                                <h5>600</h5>
                                                <span>Network</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="row-table">
                                    <div class="col-sm-6 card-block-big br">
                                        <div class="row ">
                                            <div class="col-sm-4">
                                                <div id="barchart2" style="height:40px;width:40px;"></div>
                                            </div>
                                            <div class="col-sm-8 text-center">
                                                <h5>350</h5>
                                                <span>Returns</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 card-block-big">
                                        <div class="row ">
                                            <div class="col-sm-4">
                                                <i class="icofont icofont-network-tower text-primary"></i>
                                            </div>
                                            <div class="col-sm-8 text-center">
                                                <h5>100%</h5>
                                                <span>Connections</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- table card end -->
                    </div>
                    <div class="col-md-12 col-xl-4">
                        <!-- widget primary card start -->
                        <div class="card table-card widget-primary-card">
                            <div class="">
                                <div class="row-table">
                                    <div class="col-sm-3 card-block-big">
                                        <i class="icofont icofont-star"></i>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4>4000 +</h4>
                                        <h6>Ratings Received</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- widget primary card end -->
                        <!-- widget-success-card start -->
                        <div class="card table-card widget-success-card">
                            <div class="">
                                <div class="row-table">
                                    <div class="col-sm-3 card-block-big">
                                        <i class="icofont icofont-trophy-alt"></i>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4>17</h4>
                                        <h6>Achievements</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- widget-success-card end -->
                    </div>
                   
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card table-1-card">
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr class="text-capitalize">
                                                        <th>Type</th>
                                                        <th>Lead Name</th>
                                                        <th>Views</th>
                                                        <th>Last Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="#!">Buyer</a>
                                                        </td>
                                                        <td>Denish Ann</td>
                                                        <td>9.23 A.M.</td>
                                                        <td>9/27/2015</td>
                                                    </tr>
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                   
                    <div class="col-md-6 col-xl-3">
                        <div class="card social-widget-card">
                            <div class="card-block-big bg-facebook">
                                <h3>1165 +</h3>
                                <span class="m-t-10">Facebook Users</span>
                                <i class="icofont icofont-social-facebook"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card social-widget-card">
                            <div class="card-block-big bg-twitter">
                                <h3>780 +</h3>
                                <span class="m-t-10">Twitter Users</span>
                                <i class="icofont icofont-social-twitter"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card social-widget-card">
                            <div class="card-block-big bg-linkein">
                                <h3>998 +</h3>
                                <span class="m-t-10">Linked In Users</span>
                                <i class="icofont icofont-brand-linkedin"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card social-widget-card">
                            <div class="card-block-big bg-google-plus">
                                <h3>650 +</h3>
                                <span class="m-t-10">Google Plus Users</span>
                                <i class="icofont icofont-social-google-plus"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              </div>
            </div>
            <!-- Page body end -->
        </div>
    </div>
    <!-- Main-body end -->

    <!-- Main-body end -->
   
 <!-- Warning Section Ends -->
    <!-- Required Jqurey -->
    <script type="text/javascript" src="<?php echo base_url(); ?>admincss/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>admincss/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>admincss/bower_components/tether/dist/js/tether.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>admincss/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?php echo base_url(); ?>admincss/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="<?php echo base_url(); ?>admincss/bower_components/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>admincss/bower_components/modernizr/feature-detects/css-scrollbars.js"></script>
    <!-- classie js -->
    <script type="text/javascript" src="<?php echo base_url(); ?>admincss/bower_components/classie/classie.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>admincss/bower_components/lightbox2/dist/js/lightbox.min.js"></script>
    <!-- Rickshow Chart js -->
    <script src="<?php echo base_url(); ?>admincss/bower_components/d3/d3.js"></script>
    <script src="<?php echo base_url(); ?>admincss/bower_components/rickshaw/rickshaw.js"></script>
    <!-- Morris Chart js -->
    <script src="<?php echo base_url(); ?>admincss/bower_components/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>admincss/bower_components/morris.js/morris.js"></script>
    <!-- Horizontal-Timeline js -->
    <script type="text/javascript" src="<?php echo base_url(); ?>admincss/assets/pages/dashboard/horizontal-timeline/js/main.js"></script>
    <!-- amchart js -->
    <script type="text/javascript" src="<?php echo base_url(); ?>admincss/assets/pages/dashboard/amchart/js/amcharts.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>admincss/assets/pages/dashboard/amchart/js/serial.js"></script>
    <script type="<?php echo base_url(); ?>admincss/text/javascript" src="assets/pages/dashboard/amchart/js/light.js"></script>
    <script type="<?php echo base_url(); ?>admincss/text/javascript" src="assets/pages/dashboard/amchart/js/custom-amchart.js"></script>
    <!-- i18next.min.js -->
    <script type="<?php echo base_url(); ?>admincss/text/javascript" src="bower_components/i18next/i18next.min.js"></script>
    <script type="<?php echo base_url(); ?>admincss/text/javascript" src="bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
    <script type="<?php echo base_url(); ?>admincss/text/javascript" src="bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="<?php echo base_url(); ?>admincss/text/javascript" src="bower_components/jquery-i18next/jquery-i18next.min.js"></script>
     <!-- jquery file upload js -->
    <script src="<?php echo base_url(); ?>admincss/bower_components/jquery.filer/js/jquery.filer.min.js"></script>
    <script src="<?php echo base_url(); ?>admincss/assets/pages/filer/custom-filer.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admincss/assets/pages/filer/jquery.fileuploads.init.js" type="text/javascript"></script>
    <!-- Custom js -->
    <script type="<?php echo base_url(); ?>admincss/text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
    <script type="<?php echo base_url(); ?>admincss/text/javascript" src="assets/js/script.js"></script>

   <script src="<?php echo base_url(); ?>admincss/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>admincss/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>admincss/assets/pages/data-table/js/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>admincss/assets/pages/data-table/js/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>admincss/assets/pages/data-table/js/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>admincss/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>admincss/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>admincss/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>admincss/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url(); ?>admincss/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>admincss/assets/pages/data-table/js/data-table-custom.js"></script>
    
     <script>
        CKEDITOR.replace( 'editor1' );
    </script>   
     <script>
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true
    })
    </script>  
    </body>
</html>

     



