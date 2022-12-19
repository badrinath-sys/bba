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
                        
                        <li class="active"><a href="#" class="has-arrow" ><i class="fa fa-newspaper-o"></i><span class="hide-menu"> Article Info</span></a>
                             <ul aria-expanded="false" class="collapse">
                                 <li><a href="javascript:void(0)" onclick="fnarticle()">New Article</a></li>
                                <li><a href="javascript:void(0)" class="active" onclick="fnarticlestatus()">Article Status</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow " href="#" aria-expanded="false"><i class="fa fa-image"></i><span class="hide-menu">Gallerys</span></a>
                            <ul aria-expanded="false" class="collapse">
                        <li><a href="javascript:void(0)" onclick="fnphotogallery()">Photo Gallery</a></li>
                        <li><a href="javascript:void(0)" onclick="fnphotogalleryreport()">Photogallery Report</a></li>
                        <li><a href="javascript:void(0)" onclick="fnvideogallery()">Video Gallery</a></li>
                        <li><a href="javascript:void(0)" onclick="fnvideogalleryreport()">Videogallery Report</a></li>
                        </ul>
                        </li>
                       <!--  <li> <a class="has-arrow " href="#" aria-expanded="false"><i class="fa fa-image"></i><span class="hide-menu">Gallerys</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li class="active"><a href="photo-gallery.html">Photo Gallery</a></li>
                                <li><a href="video-gallery.html">Video Gallery</a></li>
                                
                            </ul>
                        </li> -->
                       <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Contributors</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="javascript:void(0)" onclick="fncontributors()">Contributors Entry</a></li>
                                <li><a href="javascript:void(0)" onclick="fncontreport()">Contributors Reports</a></li>
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
                        
                         <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-bell"></i><span class="hide-menu">Push notification </span></a>
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
                    <h5 class="text-primary">Article Status</h5> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Article</a></li>
                        <li class="breadcrumb-item active">Article Status</li>
                         <li><a data-toggle="collapse" class=" filters-bg" href="#collapseExample"  aria-haspopup="true" aria-expanded="false"><i class="fa fa-filter"></i></a></li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            
			<!--filters--> 
			<div class="col-md-12" style="z-index: 99999;">


			<div class="filters-cont">
			<form action="#">
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

			<div class="col-md-4 mr-b">
			<label class="control-label">From <span class="sub-text">Date</span></label>
			<div class="inp-container">
			<input type="text" name="tags" class="form-control">
			</div>
			</div>
                                         	
                                         	
			<div class="col-md-4 mr-b">
			<label class="control-label">To <span class="sub-text">Date</span></label>
			<div class="inp-container">
			<input type="text" name="tags" class="form-control">
			</div>
			</div>
                                           	
			<div class="col-md-4 mr-b">
			 <label class="control-label">Article <span class="sub-text">Status</span></label>
				<div class="inp-container">
					<select class="form-control">
						<option>Select Status</option>
						<option value="1">Link-01</option>
						<option value="2">Link-02</option>
						<option value="3">Link-03</option>
					</select>
				</div>
			</div>

			<div class="col-md-12">
			<button type="submit" class="btn btn-info"><i class="fa fa-send"></i> Submit</button>
			<button type="reset" class="btn btn-danger "><i class="fa fa-refresh"></i> Reset</button>
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
                                <form action="<?php echo base_url() . "index.php/Welcome/getarticledata" ?>" class="form-horizontal" name="form" method="post" enctype="multipart/form-data" accept-charset="utf-8"> 
                                    <div class="form-body">
                                        
                                       <div class="row">
                               
                                <div class="col-md-3">
                                   <!--  <div class="form-group">
                                    <label class="control-label">From  <span class="sub-text">Date</span></label>
                                    <div class="clearfix"></div>
                                    <div class="f-cal-cont"><input type="text" class="normal-calendar form-control" placeholder="YY-MM-DD" id="fromdt" name="fromdt"></div>
                                    <div class="cal-icon"><i class="fa fa-calendar cal-icon"></i></div>
                                    </div> -->
                                    <div class="form-group">
                                    <label class="control-label">From  <span class="sub-text">Date</span></label>
                                    <div class="clearfix"></div>
                                    <div class="f-cal-cont">
                                    <input type="text" id="From-calendar" class="calendar form-control" placeholder="DD-MM-YY" id="fromdt" name="fromdt" />
                                    </div>                              
                                    <div class="cal-icon"><i class="fa fa-calendar cal-icon"></i></div>
                                    </div>
                                </div>
                              
                                <div class="col-md-3">
                                  <!--   <div class="form-group">
                                    <label class="control-label">To <span class="sub-text">Date</span></label>
                                    <div class="clearfix"></div>
                                    <div class="f-cal-cont"><input type="text" class="normal-calendar form-control"  placeholder="YY-MM-DD" id="todt" name="todt"></div>
                                    <div class="cal-icon"><i class="fa fa-calendar cal-icon"></i></div>
                                    </div> -->
                                    <div class="form-group">
                                    <label class="control-label">To <span class="sub-text">Date</span></label>
                                    <div class="clearfix"></div>
                                    <div class="f-cal-cont">
                                    <input type="text" id="From-calendar" class="calendar form-control" placeholder="DD-MM-YY" id="todt" name="todt" />
                                    </div>
                                    <div class="cal-icon"><i class="fa fa-calendar cal-icon"></i></div>
                                    </div>
                                </div>
                             
                                
                                <div class="col-md-3">
                                    <div class="form-group">
                                    <label class="control-label">Article <span class="sub-text">Status</span></label>
                                    <div class="clearfix"></div>
                                    <select class="form-control">
                                        <option>Select Status</option>
                                        <option>Draft</option>
                                        <option>Publish</option>
                                        <option>unpublish</option>
                                    </select>
                                    </div>
                                </div>

                                <div class="col-md-3 text-right" style="padding-top: 44px;" >
                          <button type="submit" class="btn btn-success" name="cmdshow" id="cmdshow" > Show</button>
                                </div>
                              
                               </div>

                                        

                                        <div class="row ">
                                        
                                        <!--Article card-->
                                       
                                        <?php 
                                                     foreach ($res as $key => $val) {
                                                        $thumbimg='';

                                        ?>
										<div class="col-md-12" >
										<?php $val['title'] ;?>
											<div class="art-main">
											<div class="row">
											<div class="col-md-3" style="padding: 0px 0px 0px 15px;">
											<div class="art-img-cont">
                                                
                                                <?php
                                                $imgchk=base_url().$val['img'];
                                                $path=base_url()."assets/images/articles/".$val['img'];
                                                
                                                //print_r($path);
                                                // if (file_exists($path)) {
                                                    $thumbimg = $path;
                                                   // print_r($thumbimg);
                                                //}
                                                    ?>

											<a href="#"><img id="img1" name="img1" src="<?php echo $thumbimg ?>" class="img-responsive"></a>
                                            
                                                
                                                

											</div>
											</div>
											<div class="col-md-7">
												<div class="update-cont">
												<ul>
													<li><i class="fa fa-calendar"></i> <?php echo $val['dt'];?></li>
													<li><?php echo $val['maincatg']; ?></li>
                                                    <li><?php echo $val['subcatg']; ?></li>
													
													<li class="pull-right"><i class="fa fa-user-circle-o"></i> MC USer </li>
												</ul>
											</div>
                                            
												<h5><?php echo $val['title'] ;?></h5>
												<p><?php echo $val['desc'] ;?></p>
												</div>
                                            <div class="col-md-2">
												<div class="art-status">
													<ul>
														<li><a href="#"><i class="fa fa-edit"></i> Edit</a></li>
                                                        <li><a href="#"><i class="fa fa-thumbs-up"></i> Republish</a></li>
                                                        <li><a href="#"><i class="fa fa-ban"></i> Un Publish</a></li>
                                                        <li><a href="#"><i class="fa fa-hourglass-start"></i> Hold</a></li>
                                                        <li><a href="#"><i class="fa fa-trash"></i> Delete</a></li>
													</ul>
												</div>
											</div>
											</div>
                                            
											
										</div>
										</div>
                                        <?php
                                                }
                                        ?>
										<!--Article card-->
										
								
										<!--Article card-->
										
										<!--Article card-->
								
										<!--Article card-->
										
										
										
										</div>
                                       
                                    </div>
                                    <div>&nbsp;</div>
                                    <div class="form-actions text-center">
                                     <!--    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                        <button type="reset" class="btn btn-inverse"><i class="fa fa-refresh"></i> Reset</button> -->
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
    
    <script type="text/javascript">
    
            $(function () {
            $('#wrapper .version strong').text('v' + $.fn.pignoseCalendar.version);

            function onSelectHandler(date, context) {

                var $element = context.element;
                var $calendar = context.calendar;
                var $box = $element.siblings('.box').show();
                var text = 'You selected date ';

                if (date[0] !== null) {
                    text += date[0].format('DD-MM-YYYY');
                }

                if (date[0] !== null && date[1] !== null) {
                    text += ' ~ ';
                }
                else if (date[0] === null && date[1] == null) {
                    text += 'nothing';
                }

                if (date[1] !== null) {
                    text += date[1].format('DD-MM-YYYY');
                }

                $box.text(text);
            }

            function onApplyHandler(date, context) {


                var $element = context.element;
                var $calendar = context.calendar;
                var $box = $element.siblings('.box').show();
                var text = 'You applied date ';

                if (date[0] !== null) {
                    text += date[0].format('DD-MM-YYYY');
                }

                if (date[0] !== null && date[1] !== null) {
                    text += ' ~ ';
                }
                else if (date[0] === null && date[1] == null) {
                    text += 'nothing';
                }

                if (date[1] !== null) {
                    text += date[1].format('DD-MM-YYYY');
                }

                $box.text(text);
            }

            // Default Calendar
            $('.calendar').pignoseCalendar({
                select: onSelectHandler
            });

            // Input Calendar
            $('.input-calendar').pignoseCalendar({
                //apply: onApplyHandler,
                select: onSelectHandler,
                buttons: true, 
                theme: 'blue',
                multiple: true,

                // It means you can give bottom button controller to the modal which be opened when you click.
            });

            // Blue theme type Calendar
            $('.calendar-blue').pignoseCalendar({
                theme: 'blue', // light, dark, blue
                select: onSelectHandler
            });

            // Multiple picker type Calendar
            $('.multi-select-calendar').pignoseCalendar({
                multiple: true,
                select: onSelectHandler
            });

             $('.normal-calendar').pignoseCalendar({
                apply: onApplyHandler,
                buttons: true, // It means you can give bottom button controller to the modal which be opened when you click.
            });


            });
    
        </script>
  	
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



				});//end
			</script>
		


</body>

</html>