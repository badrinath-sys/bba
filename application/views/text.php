<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RAFT</title>

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
  <link rel="stylesheet" href="<?php echo PATHURL ?>css/my_raft.css">
 
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
	  
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block" style="padding-top: 7px; font-weight: 600;">
		  Welcome to
        <span style="color: #3289F0;">Learning Management System</span>
      </li>
     
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo PATHURL ?>images/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo PATHURL ?>images/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo PATHURL ?>images/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      
     
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-user-circle"></i>
			<span>Madupathi Mahi</span>
        </a>
		  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          
			  <div class="user-log-cont">
					<div class="user-pic">
					<img src="<?php echo PATHURL ?>images/user8-128x128.jpg" alt="user">
					</div>
				  <div class="user-name">Madupathi Mallesh</div>
				  <div class="dropdown-divider"></div>
				  <div style="text-align:justify">
					<a href="#" class="dropdown-item">
					<i class="fas fa-envelope mr-2"></i> 4 new messages
					<span class="float-right text-muted text-sm">3 mins</span>
					</a>
				  <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
					  </div>
				  <div class="user-logout"><button class="login-btn">Logout</button></div>
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
      <img src="<?php echo PATHURL ?>images/login-raft-logo.jpg" alt="Raft-logo" class="brand-image" >
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
  

      <!-- Sidebar Menu -->
      <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                            <li class="nav-item nav-item-br menu-open">
                                <a href="index.html" class="nav-link nav-pd ">
                                    <i class="nav-icon fas fa-tachometer-alt icon-bg"></i>
                                    <p class="active">
                                        Dashboard
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>

                            </li>

                            <li class="nav-item nav-item-br">
                                <a href="#" class="nav-link nav-pd">
                                    <i class="nav-icon fas fa-copy icon-bg"></i>
                                    <p>
                                        User Management
                                        <i class="fas fa-angle-left right"></i>

                                    </p>
                                </a>
                                <ul class="nav nav-treeview sub-nav-bg pd-l-10">
                                    <li class="nav-item">
                                        <a href="<?php echo base_url() . "Login/getuserdetails"; ?>" class="nav-link nav-pd">
                                            <i class="fa fa-arrow-right nav-icon sub-icon-bg"></i>
                                            <p>User Details</p>
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
          <div class="col-sm-12">
            <ol class="breadcrumb ">
              <li class="breadcrumb-item"><a href="index.html">Use Management</a></li>
              <li class="breadcrumb-item active">User Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
		
		
		<div class="row">
		
			<div class="hide-it" style="color:red">
                            <?php
                            $dat = $this->session->flashdata('user_status');
                            print_r($dat);
                            ?>
                        </div>
		
			
			<!--All Exam-->
			<div class="col-md-12">
				<div class="my-info">
            	<h4>User Details</h4>
				<div class="add-new"><a href="<?php echo base_url() . "Login/addnewuserdetails"; ?>">  Add New User</a></div>
				<div class="smline"></div>
            
                <table id="example1" class="table table-bordered">
                  <thead>
                  <tr class="tab-bg">
                    <th>S.No</th>
                    <th>Name</th>
                    <th>User Name</th>
                    <th>Role</th>
                    <th>Action</th>
					
                  </tr>
                  </thead>
                  <tbody>
					
                       <?php
                            $i = 0;
                            foreach ($results as $results1) {
                                $i++;
                                ?>
                      
                      <tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $results1['name']; ?></td>
					<td><?php echo $results1['user_name']; ?></td>
					<td><?php echo $results1['role_name']; ?></td>
					
					<td><a href="<?php echo base_url() . "Login/edituserdetails/" . $results1['user_id']; ?>" class="edit-btn">Edit</a></td>
					</tr>
					
					  <?php } ?>
                 
                 
               
                  </tbody>
                  
                </table>
        
              <!-- /.card-body -->
				</div>
			</div>
			<!--All Exam-->
			
			
		</div>

     

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
   
    <strong>Copyright &copy;  <a href="#">Margadarsi Computers</a>.</strong> All rights reserved.
  </footer>

 
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="<?php echo PATHURL ?>js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo PATHURL ?>js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo PATHURL ?>js/jquery.dataTables.min.js"></script>
<script src="<?php echo PATHURL ?>js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo PATHURL ?>js/dataTables.responsive.min.js"></script>
<script src="<?php echo PATHURL ?>js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo PATHURL ?>js/dataTables.buttons.min.js"></script>
<script src="<?php echo PATHURL ?>js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo PATHURL ?>js/jszip.min.js"></script>
<script src="<?php echo PATHURL ?>js/pdfmake.min.js"></script>
<script src="<?php echo PATHURL ?>js/vfs_fonts.js"></script>
<script src="<?php echo PATHURL ?>js/buttons.html5.min.js"></script>
<script src="<?php echo PATHURL ?>js/buttons.print.min.js"></script>
<script src="<?php echo PATHURL ?>js/buttons.colVis.min.js"></script>
	
<!-- jQuery Knob -->
<script src="<?php echo PATHURL ?>js/jquery.knob.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo PATHURL ?>js/sparkline.js"></script>

<!-- AdminLTE App -->
<script src="<?php echo PATHURL ?>js/adminlte.min.js"></script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
	

<script>
  $(function () {
    /* jQueryKnob */

    $('.knob').knob({
      /*change : function (value) {
       //console.log("change : " + value);
       },
       release : function (value) {
       console.log("release : " + value);
       },
       cancel : function () {
       console.log("cancel : " + this.value);
       },*/
      draw: function () {

        // "tron" case
        if (this.$.data('skin') == 'tron') {

          var a   = this.angle(this.cv)  // Angle
            ,
              sa  = this.startAngle          // Previous start angle
            ,
              sat = this.startAngle         // Start angle
            ,
              ea                            // Previous end angle
            ,
              eat = sat + a                 // End angle
            ,
              r   = true

          this.g.lineWidth = this.lineWidth

          this.o.cursor
          && (sat = eat - 0.3)
          && (eat = eat + 0.3)

          if (this.o.displayPrevious) {
            ea = this.startAngle + this.angle(this.value)
            this.o.cursor
            && (sa = ea - 0.3)
            && (ea = ea + 0.3)
            this.g.beginPath()
            this.g.strokeStyle = this.previousColor
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false)
            this.g.stroke()
          }

          this.g.beginPath()
          this.g.strokeStyle = r ? this.o.fgColor : this.fgColor
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false)
          this.g.stroke()

          this.g.lineWidth = 2
          this.g.beginPath()
          this.g.strokeStyle = this.o.fgColor
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false)
          this.g.stroke()

          return false
        }
      }
    })
    /* END JQUERY KNOB */

    //INITIALIZE SPARKLINE CHARTS
    var sparkline1 = new Sparkline($('#sparkline-1')[0], { width: 240, height: 70, lineColor: '#92c1dc', endColor: '#92c1dc' })
    var sparkline2 = new Sparkline($('#sparkline-2')[0], { width: 240, height: 70, lineColor: '#f56954', endColor: '#f56954' })
    var sparkline3 = new Sparkline($('#sparkline-3')[0], { width: 240, height: 70, lineColor: '#3af221', endColor: '#3af221' })

    sparkline1.draw([1000, 1200, 920, 927, 931, 1027, 819, 930, 1021])
    sparkline2.draw([515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921])
    sparkline3.draw([15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21])

  })
  $(function () {
                $(".hide-it").hide(7000);
            });
</script>
</body>
</html>
