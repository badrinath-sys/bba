<?php include('meta.php');?>
<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <?php include('common/mb_header.php');?>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            
             <!--logos-->
			<div class="mahila_bharat logo-cont"><img src="<?php echo base_url(); ?>assets/images/logo.png"  width="40%"></div>
			<div class="health logo-cont"><img src="<?php echo base_url(); ?>assets/images/health-logo.png" width="40%"></div>
			<div class="yong_bharat logo-cont"><img src="<?php echo base_url(); ?>assets/images/young-bharat.png" width="40%"></div>
			<div class="bala_bharat logo-cont"><img src="<?php echo base_url(); ?>assets/images/logo.png" width="40%"></div>
			
			
			<div class="company-select">
			<select class="form-control custom-select text-center" id="group-logos">
			<option value="mahila_bharat">Mahila Bharat</option>
			<option value="health">Health Bharat</option>
			<option value="yong_bharat">Annadata</option>
			<option value="bala_bharat">Bala Bharat</option>
			</select>
			</div>
   			<!--logos-->
            
            
            
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
               
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        
                      
                        <li class="nav-devider"></li>
                        
                        <li class=""><a class="has-arrow" href="#"  aria-expanded="false"><i class="fa fa-newspaper-o"></i><span class="hide-menu"> Article Info</span></a>
                             <ul aria-expanded="false" class="collapse">
                                <li><a href="javascript:void(0)" class="active" onclick="fnarticle()">New Article</a></li>
                                <li><a href="javascript:void(0)" onclick="fnarticlestatus()">Article Status</a></li>
                            </ul>
                        </li>
                        <li class=""> <a class="has-arrow " href="#" aria-expanded="false"><i class="fa fa-image"></i><span class="hide-menu">Gallerys</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="javascript:void(0)" class="" onclick="fnphotogallery()">Photo Gallery</a></li>
                        <li><a href="javascript:void(0)" onclick="fnphotogalleryreport()">Photogallery Report</a></li>
                        <li><a href="javascript:void(0)" onclick="fnvideogallery()">Video Gallery</a></li>
                        <li><a href="javascript:void(0)" onclick="fnvideogalleryreport()">Videogallery Report</a></li>
                    </ul>
                </li>
                       
                      <!--   <li> <a class="has-arrow " href="#" aria-expanded="false"><i class="fa fa-image"></i><span class="hide-menu">Gallerys</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="photo-gallery.html">Photo Gallery</a></li>
                                <li><a href="video-gallery.html">Video Gallery</a></li>
                                
                            </ul>
                        </li> -->
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Contributors</span></a>
                            <ul aria-expanded="false" class="collapse">
                                 <li><a href="javascript:void(0)" onclick="fncontributors()">Contributors Entry</a></li>
                                 <li><a href="javascript:void(0)" onclick="fncontreport()">Contributors Report</a></li>
                                
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-calendar"></i><span class="hide-menu">Daily Tips </span></a>
                            <ul aria-expanded="false" class="collapse">
                                 <li><a href="javascript:void(0)" onclick="fndailytips()">Daily Tips Entry</a></li>  
                                   <li><a href="javascript:void(0)" onclick="fndailyreport()">Daily Tips Report</a></li>  
                                
                            </ul>
                        </li>
                        
                         <li class="active"> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-camera-retro"></i><span class="hide-menu">Sliders </span></a>
                            <ul aria-expanded="false" class="collapse">
                               <li><a href="javascript:void(0)" class="active" onclick="fnslider()">Sliders Entry</a></li>   
                                  <li><a href="javascript:void(0)" onclick="fnsliderreport()">Sliders Report</a></li>                             
                            </ul>
                        </li>
                        
                         <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tags"></i><span class="hide-menu">Meta Tags </span></a>
                            <ul aria-expanded="false" class="collapse">
                                 <li><a href="javascript:void(0)" onclick="fnmetatag()">Meta Tags Entry</a></li>   
                                  <li><a href="javascript:void(0)" onclick="fntagreport()()">Meta Tags Report</a></li>                               
                            </ul>
                        </li>
                        
                        <li> <a class="has-arrow " href="#" aria-expanded="false"><i class="fa fa-bell"></i><span class="hide-menu">Push notification </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="javascript:void(0)" onclick="fnpushnote()">Notification Entry</a></li>   
                                 <li><a href="javascript:void(0)" onclick="fnpushreport()">Notification Report</a></li>                              
                            </ul>
                        </li>
                       
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        
        
        
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h5 class="text-primary">Sliders</h5> 
                    

                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Sliders</a></li>
                        <li class="breadcrumb-item active">Sliders Entry</li>
                        <li><a data-toggle="collapse" class=" filters-bg" href="#collapseExample"  aria-haspopup="true" aria-expanded="false"><i class="fa fa-filter"></i></a></li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            
				<!--filters-->  
				<div class="col-md-12" style="z-index: 99999;">            	   
				<div class="filters-cont">
				<form action="#" name="slider" id="slider">
				<div class="col-md-12 animated zoomIn collapse"  id="collapseExample">

				<div>&nbsp;</div>
				<div class="row">

				<div class="col-md-4">
				<div class="form-group">
				<label class="control-label">Select <span class="sub-text">Language</span></label>
				<div class="clearfix"></div>
				<select class="example-enableFiltering-includeSelectAllOption" multiple="multiple">
				<option value="1">Option 1</option>
				<option value="2">Option 2</option>
				<option value="3">Option 3</option>
				<option value="4">Option 4</option>
				<option value="5">Option 5</option>
				</select>
				</div>
				</div>

				<div class="col-md-4">
				<div class="form-group">
				<label class="control-label">Group  <span class="sub-text">Category</span></label>
				<div class="clearfix"></div>
				<select class="example-enableFiltering-includeSelectAllOption" multiple="multiple">
				<option value="1">Option 1</option>
				<option value="2">Option 2</option>
				<option value="3">Option 3</option>
				<option value="4">Option 4</option>
				<option value="5">Option 5</option>
				</select>
				</div>
				</div>

				<div class="col-md-4">
				<div class="form-group">
				<label class="control-label">Main  <span class="sub-text">Category</span></label>
				<div class="clearfix"></div>
				<select class="example-enableFiltering-includeSelectAllOption" multiple="multiple">
				<option value="1">Option 1</option>
				<option value="2">Option 2</option>
				<option value="3">Option 3</option>
				<option value="4">Option 4</option>
				<option value="5">Option 5</option>
				</select>
				</div>
				</div>

				<div class="col-md-4">
				<div class="form-group">
				<label class="control-label">Sub <span class="sub-text">Category</span></label>
				<div class="clearfix"></div>
				<select class="example-enableFiltering-includeSelectAllOption" multiple="multiple">
				<option value="1">Option 1</option>
				<option value="2">Option 2</option>
				<option value="3">Option 3</option>
				<option value="4">Option 4</option>
				<option value="5">Option 5</option>
				</select>
				</div>
				</div>

				<div class="col-md-4">
				<div class="form-group">
				<label class="control-label">Sub <span class="sub-text">Category</span></label>
				<div class="clearfix"></div>
				<select class="example-enableFiltering-includeSelectAllOption" multiple="multiple">
				<option value="1">Option 1</option>
				<option value="2">Option 2</option>
				<option value="3">Option 3</option>
				<option value="4">Option 4</option>
				<option value="5">Option 5</option>
				</select>
				</div>
				</div>

				<div class="col-md-4">
				<div class="form-group">
				<label class="control-label">Sub <span class="sub-text">Category</span></label>
				<div class="clearfix"></div>
				<select class="example-enableFiltering-includeSelectAllOption" multiple="multiple">
				<option value="1">Option 1</option>
				<option value="2">Option 2</option>
				<option value="3">Option 3</option>
				<option value="4">Option 4</option>
				<option value="5">Option 5</option>
				</select>
				</div>
				</div>

				<div class="col-md-12">
				<button type="submit" class="btn btn-info btn-rounded"><i class="fa fa-send"></i> Submit</button>
				<button type="reset" class="btn btn-danger btn-rounded" ><i class="fa fa-refresh"></i> Reset</button>
				</div>


				<div>&nbsp;</div>

				</div>

				</div>
				</form>
				</div>
				</div>
				<!--filters-->    
                    
						<div class="col-lg-12">
							<div class="card card-outline-primary">
                            
                            <div class="card-body">
                                 <form action="<?php echo base_url() . "index.php/Welcome/savenewslider" ?>" class="form-horizontal" name="form" method="post" enctype="multipart/form-data" accept-charset="utf-8">
                                    <div class="form-body">

                                    <?php
                                        $dat=$this->session->flashdata('slider_status');
                                        print_r($dat);
                                        ?>
                                        <div class="row p-t-20">
                                           
                                            
                                          	
                                         	<div class="col-md-4 mr-b">
                                           	 <label class="control-label">Page wise  <span class="sub-text">Slider</span></label>
												<div class="clearfix"></div>
														<select class="example-enableFiltering-includeSelectAllOption" multiple="multiple" name="sliderpage[]" id="sliderpage[]" required>
														<?php foreach($page as $k=>$v){?>
                                                            <option value=<?php echo $v['id'];?>><?php echo $v['name'];?></option>
                                                        <?php }?>
														</select>
                                           	</div>
                                         	
                                         	
                                         	<div class="col-md-4 mr-b">
                                           	 <label class="control-label">Validity  <span class="sub-text">Period</span></label>
                                           	 <div class="inp-container">
												<input type="date" name="tdate" id="tdate" class="form-control" value="<?php echo date("Y-m-d");?>" required>
                                          	 </div>
                                           	</div>
                                           	
                                           	<div class="col-md-4 mr-b">
                                           	 <label class="control-label">Navigation   <span class="sub-text">Link</span></label>
                                           	 <div class="inp-container">
											 <input type="text" id="destination_link" name="destination_link" class="form-control" required>
                                          	 </div>
                                           	</div>
                                           	
                                           
                                           	
                                           	<div class="col-md-12 mr-b mr-t">
                                           		<label class="control-label">Slider <span class="sub-text">( Images )</span> </label>
												<div class="file-loading">
												<input  name="newfile" id="newfile" type="file" multiple required>
												</div>
                                           	</div>
                                           	
                                           	
                                          	
                                        </div>
                                    
                                       
										</div>
										<div class="form-actions text-center">
											<button type="submit" class="btn btn-success" id="upload" name="upload"> <i class="fa fa-check"></i> Save</button>
											<button type="reset" class="btn btn-inverse" id="cmdclear" name="cmdclear" onclick="fnclear()"><i class="fa fa-refresh"></i> Reset</button>
										</div>
                                </form>
                            </div>
                        </div>
						</div>
                        

						<!-- footer -->
						<?php include('common/mb_footer.php');?>
						<!-- End footer -->
                        
                    </div>
                    
				

                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            
        
    <!-- End Wrapper -->
    <!-- All Jquery -->
    
   

  	
   		<!--multi selection upload-->	
		<script type="text/javascript">
		
		$(document).ready(function() {
		$('.example-enableFiltering-includeSelectAllOption').multiselect({
			includeSelectAllOption: true,
			enableFiltering: true
		});
		});
		</script>
		
		<!--multi file upload-->	
		<script type="text/javascript">

		$('#newfile').fileinput({
		theme: 'fa',
		language: 'es',
		uploadUrl: '#',
		allowedFileExtensions: ['jpg', 'png', 'gif']
		});

		$(document).ready(function () {
		$("#test-upload").fileinput({
		'theme': 'fa',
		'showPreview': false,
		'allowedFileExtensions': ['jpg', 'png', 'gif'],
		'elErrorContainer': '#errorBlock'
		});


		});
		</script>
		
		<!--logos-->
		<script type="text/javascript">
				$(document).ready(function(){


				$("#group-logos").change(function(){
				$(this).find("option:selected").each(function(){
				var optionValue = $(this).attr("value");
				if(optionValue){
				$(".logo-cont").not("." + optionValue).hide();
				$("." + optionValue).show();
				} else{
				$(".logo-cont").hide();
				}
				});
				}).change();

                // $("#upload").click(function (e) {

                //      var formdata = $("#slider").serialize();
                                   
                //     $.ajax({
                //         'type': 'POST',
                //         'data': formdata,
                //         'url': '<?php //echo base_url(); ?>index.php/Welcome/savenewslider',
                //         'success': function (data) {
                //             alert(data);
                //             console.log(data);
                //              alert("Records Saved Successfully");
                //            // $("#cmdclear").click();
                           
                //         }
                //     });

                // }); //save
               

				});//document
			</script>


</body>

</html>