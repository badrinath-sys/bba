
<!DOCTYPE HTML>
<html>
<head>
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />

 <?php include('Linksinclude.php') ;?>
<!-- Placed js at the end of the document so the pages load faster -->

</head> 
   
 <body class="sticky-header left-side-collapsed"  >
    <section>
    <!-- left side start-->
        <div class="left-side sticky-left-side">

            <!--logo and iconic logo start-->
            <div class="logo">
                <h1><a href="<?php echo base_url(); ?>assets/index.php">Easy <span>Admin</span></a></h1>
            </div>
            <div class="logo-icon text-center active">
                <a href="<?php echo base_url(); ?>assets/index.php"><i class="lnr lnr-home"></i> </a>
            </div>

            <!--logo and iconic logo end-->
          <?php include('common/navigation.php');?>
    
    
		<!-- main content start-->
		<div class="main-content">
			<!-- header-starts -->
			<div class="header-section">
		
			<!--toggle button start-->
<!--			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>-->
			<!--toggle button end-->

			<!--notification menu start -->
			<div class="menu-right">
			<div style="float: left; font-size: 20px; font-weight: 600; padding-left: 15px; padding-top: 5px; color: #f34040; text-transform: uppercase;">ETV Bharat</div>
			<div style="float: right; padding-right: 100px;">
				
				<div class="user-panel-top">  
					
					<div class="profile_details_right">
						<ul class="nofitications-dropdown">
						
							
							
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
									<ul class="dropdown-menu">
										<li>
											<div class="notification_header">
												<h3>You have 3 new notification</h3>
											</div>
										</li>
										<li><a href="#">
											<div class="user_img"><img src="images/1.png" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet</p>
											<p><span>1 hour ago</span></p>
											</div>
										  <div class="clearfix"></div>	
										 </a></li>
										 <li class="odd"><a href="#">
											<div class="user_img"><img src="images/1.png" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li><a href="#">
											<div class="user_img"><img src="images/1.png" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li>
											<div class="notification_bottom">
												<a href="#">See all notification</a>
											</div> 
										</li>
									</ul>
							</li>	
							
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span style="background:url(images/1.jpg) no-repeat center"> </span> 
										 <div class="user-name">
											<p>Madupathi<span>Administrator</span></p>
										 </div>
										 <i class="lnr lnr-chevron-down"></i>
										 <i class="lnr lnr-chevron-up"></i>
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
									<li> <a href="#"><i class="fa fa-user"></i>Profile</a> </li> 
									<li> <a href="sign-up.html"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
									   							   		
							<div class="clearfix"></div>	
						</ul>
					</div>
				
				</div>
				</div>
				
			  </div>
			<!--notification menu end -->
			</div>
		<!-- //header-ends -->
			
				<br>
				<div class="col-md-12">
					
				<div class="col-md-12">
					<ul class="breadcrumb bre-bg">
						<li><a href="#">Customer Service Module</a></li>
						
						<li class="active">Users Uploads</li>
					</ul>
				</div>
					<form action="<?php echo base_url()."index.php/Welcome/userupload" ?>">
				
				<div class="col-md-12 mb-10">
				<div class="card-header">Users Upload Data</div>
				<div class="card-body">
				
					
						
					<table id="example" class="table table-bordered " style="width:100%">
						<thead>
						<th>S No</th>
						<th>Category</th>
						<th>Sub Category</th>
						<th>Video / Image</th>
						<th>Remarks</th>
						<th>User Upload Date</th>
						</thead>
						
						<tbody>
							<?php
                                                  foreach($uploadrep as $k=>$v){?>
                                            <tr>      
                          <td><?php echo $v['code'];?> </td>
                           <td><?php echo $v['maincatg'];?> </td>
                           <td><?php echo $v['subcatg'];?> </td>
                           <td><?php echo $v['image'];?> </td>
                           <td><?php echo $v['remarks'];?> </td>
                           <td><?php echo $v['dt'];?> </td>

                       </tr>
                                             

                         <?php }?>
							
						
						</tbody>
					</table>
					
					<div class="clearfix"></div>	
				</div>
				
				</div>
     
     
      
				
       			
       		
				
				</form>
				</div>
				
				
				
				</div>
       
        <!--footer section start-->
			<?php include('common/mb_footer.php');?>
        <!--footer section end-->

      <!-- main content end-->
   </section>

		<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
	 
		<!-- Bootstrap Core JavaScript -->
<!--		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>-->
	 	<script src="<?php echo base_url(); ?>assets/js/data-table/jquery.dataTables.min.js"></script>
	 	<script src="<?php echo base_url(); ?>assets/js/data-table/jquery.dataTables.min.js"></script>
	 	<script src="<?php echo base_url(); ?>assets/js/data-table/dataTables.bootstrap.min.js"></script>
	 	<script src="<?php echo base_url(); ?>assets/js/data-table/dataTables.buttons.min.js"></script>
	 	<script src="<?php echo base_url(); ?>assets/js/data-table/buttons.bootstrap.min.js"></script>
	 	<script src="<?php echo base_url(); ?>assets/js/data-table/jszip.min.js"></script>
	 	<script src="<?php echo base_url(); ?>assets/js/data-table/vfs_fonts.js"></script>
	 	<script src="<?php echo base_url(); ?>assets/js/data-table/buttons.html5.min.js"></script>
	 	
		<script type="text/javascript">
				$(document).ready(function() {
				$('#example').DataTable( {
				dom: 'Bfrtip',
				buttons: [

				'excelHtml5',

				'pdfHtml5'
				]
				} );
				} );
		</script>
	 
	 	<script type="text/javascript">
		$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();   
		});
		</script>
</body>
</html>