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
                        <li class="active"> <a class="has-arrow " href="#" aria-expanded="false"><i class="fa fa-image"></i><span class="hide-menu">Gallerys</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="javascript:void(0)" onclick="fnphotogallery()">Photo Gallery</a></li>
                        <li><a href="javascript:void(0)" onclick="fnphotogalleryreport()">Photogallery Report</a></li>
                        <li><a href="javascript:void(0)" class="active" onclick="fnvideogallery()">Video Gallery</a></li>
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
                        
                         <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-camera-retro"></i><span class="hide-menu">Sliders </span></a>
                            <ul aria-expanded="false" class="collapse">
                               <li><a href="javascript:void(0)" onclick="fnslider()">Sliders Entry</a></li>   
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
                <h5 class="text-primary">Video Gallery</h5> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Video Gallery</a></li>
                    <li class="breadcrumb-item active">Video Gallery Entry</li>
                    <li><a data-toggle="collapse" class=" filters-bg" href="#collapseExample" aria-haspopup="true" aria-expanded="false"><i class="fa fa-filter"></i></a></li>
                </ol>
            </div>
        </div>
        <!-- End Bread crumb -->

        <!--filters-->
        <div class="col-md-12" style="z-index: 99999;">
            <div class="filters-cont">
                <form action="#">
                    <div class="col-md-12 animated zoomIn collapse" id="collapseExample">

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
                                    <label class="control-label">Group <span class="sub-text">Category</span></label>
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
                                    <label class="control-label">Main <span class="sub-text">Category</span></label>
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
                                <button type="reset" class="btn btn-danger btn-rounded"><i class="fa fa-refresh"></i> Reset</button>
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
                    <form action="<?php echo base_url() . "index.php/Welcome/videogallerys" ?>" class="form-horizontal" name="frmarticle" id="frmarticle" method="post" enctype="multipart/form-data" accept-charset="utf-8">
                        <div class="form-body">
                            <?php
                                        $dat=$this->session->flashdata('thumbvideo_status');
                                        print_r($dat);
                                        ?>
                            <div class="row p-t-20">

                                <div class="col-md-4 mr-b">
                                    <label class="control-label">Video / Audio <span class="sub-text">Title</span></label>
                                    <input type="text" name="title" class="form-control" required>
                                </div>

                                <div class="col-md-4 mr-b">
                                    <label class="control-label">Folder <span class="sub-text">Name</span></label>
                                    <input type="text" name="foldername" class="form-control" required>
                                </div>

                                <div class="col-md-4 mr-b">
                                    <label class="control-label">Thumb <span class="sub-text">( Image )</span> </label>
                                    <div class="clearfix"></div>
                                    <div class="img-inp-cont">
                                        <input type="file" name="newfile[]" id=newfile[] class="file-control" required>
                                        <!-- <input type="file" name="file-7[]" id="file-8" class="inputfile inputfile-6" data-multiple-caption="{count} files selected" multiple />
                                        <label for="file-8"><span></span> <strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> Image Upload &hellip;</strong></label> -->
                                    </div>
                                </div>

                                <div class="col-md-12 mr-b">
                                    <label> Video / <span class="sub-text">Link</span> </label>
                                    <input type="text" name="videolink" class="form-control" placeholder="https://www.youtube.com/watch?v=u2yGjSib0W4" required>
                                </div>

                                <div class="col-md-12 mr-b">
                                    <label> Audio / <span class="sub-text">Link</span> </label>
                                    <input type="text" name="audiolink" class="form-control" placeholder="https://www.youtube.com/watch?v=u2yGjSib0W4" required>
                                </div>

                                <div class="col-md-12 mr-b">
                                    <label> Tags / <span class="sub-text">keywords</span> </label>
                                    <input type="text" name="keyword" class="form-control" required>
                                </div>

                            </div>

                        </div>
                        <div class="form-actions text-center">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                            <button type="reset" class="btn btn-inverse"><i class="fa fa-refresh"></i> Reset</button>
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
		<!--multi file upload-->
		$(document).ready(function() {
		$('.example-enableFiltering-includeSelectAllOption').multiselect({
			includeSelectAllOption: true,
			enableFiltering: true
		});
		});
		</script>
		
		<!--multi file upload-->	
		<script type="text/javascript">

		$('#file-es').fileinput({
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
				});
			</script>
		


</body>

</html>