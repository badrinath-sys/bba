<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BBA</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo PATHURL ?>css/all.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="<?php echo PATHURL ?>css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="<?php echo PATHURL ?>css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="<?php echo PATHURL ?>css/buttons.bootstrap4.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo PATHURL ?>css/adminlte.min.css">

        <!-- my style -->
        <link rel="stylesheet" href="<?php echo PATHURL ?>css/my_bba.css">
        <link rel="stylesheet" href="<?php echo PATHURL ?>css/daterangepicker.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="<?php echo PATHURL ?>css/select2.min.css">
	<link rel="stylesheet" href="<?php echo PATHURL ?>css/select2-bootstrap4.min.css">
        <link rel="stylesheet" href="<?php echo PATHURL ?>css/summernote-bs4.min.css">
        <script src="<?php echo PATHURL ?>js/jquery.min.js"></script>
        <script src="<?php echo PATHURL ?>js/commonvalidate.js"></script>
        
         <script>
            var base_url = "<?php echo base_url(); ?>";
            var expirytime = "<?php echo $this->config->item('sess_expiration'); ?>";
        </script>

    </head>
    <body class="hold-transition sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->

<!--                 <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block" style="padding-top: 7px; font-weight: 600;">
                        Welcome to
                        <span style="color: #3289F0;">Learning Management System</span>
                    </li>

                </ul> -->

    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="home" role="button"><i class="fas fa-bars"></i></a>
      </li>
        <li class="nav-item d-none d-sm-inline-block breadcrumb-item pt-2">
		 <a href="#"><?php echo $main; ?></a>
      </li>
	  <li class="breadcrumb-item active pt-2"><?php echo $submenu;?></li>
     
    </ul>
				
				 <!--<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
          <div class="col-sm-12">
            <ol class="breadcrumb ">
              <li class="breadcrumb-item"><a href="index.html">Use Management</a></li>
              <li class="breadcrumb-item active">User Details</li>
            </ol>
          </div>
        </div>
      </div>
    </section>-->

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Navbar Search -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="fas fa-user-circle"></i>
                            <span><?php echo $this->session->userdata('name'); ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <div class="user-log-cont">
                                <div class="user-name"><?php echo $this->session->userdata('name'); ?></div>
                                <div class="dropdown-divider"></div>
                                <div class="user-logout"><a href="<?php echo base_url() . "NewLogin/logout"; ?>" class="login-btn">Logout</a></div>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- Right navbar links -->
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar  elevation-4 navi-bgs">
                <!-- Brand Logo -->
                <a href="#" class="brand-link brand-bg">
                    <img src="<?php echo PATHURL ?>images/bba-logo.png" alt="Raft-logo" class="brand-image" >
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <?php
                    $roleid = $this->session->userdata('role');

                    if ($roleid == 1) {

                        $mainvisable = array(1, 2,3,4,5,6);
                        //$visiblemenus = array(1, 2);
                    }
                    if ($roleid == 2) {
                        $mainvisable = array(5);
                        // $visiblemenus = array(8);
                    }
                    ?>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                           
                            <?php  if ($roleid == 1) { ?>
                             <li class="nav-item nav-item-br menu-open">
                                <a href="<?php echo base_url() . "NewLogin/home"; ?>" class="nav-link nav-pd ">
                                    <i class="nav-icon fas fa-tachometer-alt icon-bg"></i>
                                    <p class="active">
                                        Dashboard
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>

                            </li>
<!--                                <li class="nav-item nav-item-br">
                                    <a href="#" class="nav-link nav-pd">
                                        <i class="nav-icon fas fa-copy icon-bg"></i>
                                        <p>
                                            User Management
                                            <i class="fas fa-angle-left right"></i>

                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview sub-nav-bg pd-l-10">
                                        <li class="nav-item">
                                            <a href="<?php echo base_url() . "NewLogin/getuserdetails"; ?>" class="nav-link nav-pd">
                                                <i class="fa fa-arrow-right nav-icon sub-icon-bg"></i>
                                                <p>Admin user</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link nav-pd">
                                                <i class="fa fa-arrow-right nav-icon sub-icon-bg"></i>
                                                <p>Faculty user</p>
                                            </a>
                                        </li>
                                         <li class="nav-item">
                                            <a href="#" class="nav-link nav-pd">
                                                <i class="fa fa-arrow-right nav-icon sub-icon-bg"></i>
                                                <p>Student user</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>-->
                                 <li class="nav-item nav-item-br">
                                    <a href="#" class="nav-link nav-pd">
                                        <i class="nav-icon fas fa-copy icon-bg"></i>
                                        <p>
                                            Roles
                                            <i class="fas fa-angle-left right"></i>

                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview sub-nav-bg pd-l-10">
                                       
                                        <li class="nav-item">
                                            <a href="<?php echo base_url() . "Roles/roles_creation"; ?>" class="nav-link nav-pd">
                                                <i class="fa fa-arrow-right nav-icon sub-icon-bg"></i>
                                                <p>Creation of roles</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
<!--                                   <li class="nav-item nav-item-br">
                                    <a href="#" class="nav-link nav-pd">
                                        <i class="nav-icon fas fa-copy icon-bg"></i>
                                        <p>
                                            Languages
                                            <i class="fas fa-angle-left right"></i>

                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview sub-nav-bg pd-l-10">
                                       
                                        <li class="nav-item">
                                            <a href="#" class="nav-link nav-pd">
                                                <i class="fa fa-arrow-right nav-icon sub-icon-bg"></i>
                                                <p>Multi language data</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>-->
<!--                                <li class="nav-item nav-item-br">
                                    <a href="#" class="nav-link nav-pd">
                                        <i class="nav-icon fas fa-copy icon-bg"></i>
                                        <p>
                                            Access Management
                                            <i class="fas fa-angle-left right"></i>

                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview sub-nav-bg pd-l-10">
                                       
                                        <li class="nav-item">
                                            <a href="<?php echo base_url() . "Roles/roles_assign"; ?>" class="nav-link nav-pd">
                                                <i class="fa fa-arrow-right nav-icon sub-icon-bg"></i>
                                                <p>User access management </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>-->
                                <?php } ?>
                                 <?php //if (in_array(5, $mainvisable)) {
                                      if ($roleid == 1 || $roleid == 2) {
                                     ?>
                                <li class="nav-item nav-item-br">
                                    <a href="#" class="nav-link nav-pd">
                                        <i class="nav-icon fas fa-copy icon-bg"></i>
                                        <p>
                                        Skill Module
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                       <ul class="nav nav-treeview sub-nav-bg pd-l-10">
                                        <li class="nav-item">
                                            <a href="<?php echo base_url() . "Skill/skillreport"; ?>" class="nav-link nav-pd">
                                                <i class="fa fa-arrow-right nav-icon sub-icon-bg"></i>
                                                <p>Skills Report</p>
                                            </a>
                                        </li>
                                      
                                    </ul>
                               </li>
                                  <li class="nav-item nav-item-br">
                                    <a href="#" class="nav-link nav-pd">
                                        <i class="nav-icon fas fa-copy icon-bg"></i>
                                        <p>
                                        Lesson Module
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                       <ul class="nav nav-treeview sub-nav-bg pd-l-10">
                                        <li class="nav-item">
                                            <a href="<?php echo base_url() . "Lesson/lessonreport"; ?>" class="nav-link nav-pd">
                                                <i class="fa fa-arrow-right nav-icon sub-icon-bg"></i>
                                                <p>Lesson Report</p>
                                            </a>
                                        </li>
                                      
                                    </ul>
                               </li>
                                 <li class="nav-item nav-item-br">
                                    <a href="#" class="nav-link nav-pd">
                                        <i class="nav-icon fas fa-copy icon-bg"></i>
                                        <p>
                                          Content Files Upload 
                                            <i class="fas fa-angle-left right"></i>

                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview sub-nav-bg pd-l-10">
                                       <li class="nav-item">
                                            <a href="<?php echo base_url() . "Upload/addnewdocument"; ?>" class="nav-link nav-pd">
                                                <i class="fa fa-arrow-right nav-icon sub-icon-bg"></i>
                                                <p>Add New Document</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo base_url() . "Upload/documentreport"; ?>" class="nav-link nav-pd">
                                                <i class="fa fa-arrow-right nav-icon sub-icon-bg"></i>
                                                <p>Encrypted PDF documents</p>
                                            </a>
                                        </li> 
<!--                                         <li class="nav-item">
                                            <a href="<?php echo base_url() . "Upload/completednotes"; ?>" class="nav-link nav-pd">
                                                <i class="fa fa-arrow-right nav-icon sub-icon-bg"></i>
                                                <p>Completed Notes</p>
                                            </a>
                                        </li>
                                         <li class="nav-item">
                                            <a href="<?php echo base_url() . "Upload/completedtranslations"; ?>" class="nav-link nav-pd">
                                                <i class="fa fa-arrow-right nav-icon sub-icon-bg"></i>
                                                <p>Completed Translations</p>
                                            </a>
                                        </li>-->
                                         <?php  if ($roleid == 1) { ?>
<!--                                        <li class="nav-item">
                                            <a href="#" class="nav-link nav-pd">
                                                <i class="fa fa-arrow-right nav-icon sub-icon-bg"></i>
                                                <p>Encrypted VIDEO files </p>
                                            </a>
                                        </li>-->
					<li class="nav-item">
                                            <a href="<?php echo base_url() . "Upload/servervariables"; ?>" class="nav-link nav-pd">
                                                <i class="fa fa-arrow-right nav-icon sub-icon-bg"></i>
                                                <p>Server Variables </p>
                                            </a>
                                        </li>
                                         <?php } ?>
                                    </ul>
                                </li>
                                 <?php } ?>
                                <?php  if ($roleid == 1) {  ?>
<!--                                <li class="nav-item nav-item-br">
                                    <a href="#" class="nav-link nav-pd">
                                        <i class="nav-icon fas fa-copy icon-bg"></i>
                                        <p>
                                         Question bank upload
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                       <ul class="nav nav-treeview sub-nav-bg pd-l-10">
                                        <li class="nav-item">
                                            <a href="<?php echo base_url() . "Upload/quizreport"; ?>" class="nav-link nav-pd">
                                                <i class="fa fa-arrow-right nav-icon sub-icon-bg"></i>
                                                <p>Questions Report</p>
                                            </a>
                                        </li>
                                      
                                    </ul>
                               </li>-->
                                  
                                <?php } ?>
                            

                        </ul>
                    </nav>
                 </div>
            </aside>