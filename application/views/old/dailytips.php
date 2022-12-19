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
                        <li><a href="javascript:void(0)" onclick="fnphotogallery()">Photo Gallery</a></li>
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
                        <li class="active"> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-calendar"></i><span class="hide-menu">Daily Tips </span></a>
                            <ul aria-expanded="false" class="collapse">
                                 <li><a href="javascript:void(0)" class="active" onclick="fndailytips()">Daily Tips Entry</a></li>  
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
                    <h5 class="text-primary">Daily Tips</h5> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Daily Tips</a></li>
                        <li class="breadcrumb-item active">Daily Tips Entry</li>
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
                                <form action="#" name="frmdaily" id="frmdaily">
                                    <div class="form-body">
                                        
                                        <div class="row p-t-20">
                                           
                                            
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Group  <span class="sub-text">Category</span></label>
                                                     	<div class="clearfix"></div>
														<select class="example-enableFiltering-includeSelectAllOption" multiple="multiple" id="cmbgroupcatg" required>
														<?php foreach($cat as $k=>$v){?>
                                                            <option value=<?php echo $v['id'];?>><?php echo $v['name'];?></option>
                                                        <?php }?>
														</select>
                                           		 </div>
                                           	</div>
                                            
                                           <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Main  <span class="sub-text">Category</span></label>
                                                     	<div class="clearfix"></div>
														<select class="example-enableFiltering-includeSelectAllOption"  multiple="multiple" id="cmbmaincatg" required>
													
														</select>
                                           		 </div>
                                           	</div>
                                           	
                                           	 <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Sub <span class="sub-text">Category</span></label>
                                                     	<div class="clearfix"></div>
														<select class="example-enableFiltering-includeSelectAllOption" multiple="multiple" id="cmbsubcatg" required>
														
														</select>
                                           		 </div>
                                           	</div>
                                           	
                                          
                                          	
                                         	<div class="col-md-4 mr-b">
                                           	 <label class="control-label">Tips <span class="sub-text">Date</span></label>
                                           	 	<div class="inp-container">
												<input type="date" name="tdate" id="tdate" class="form-control" value="<?php echo date("Y-m-d");?>" required>
                                           		</div>
                                           	</div>
                                         	
                                         	
                                         	<div class="col-md-4 mr-b">
                                           	 <label class="control-label">Validity Date  <span class="sub-text">Time Period</span></label>
                                           	 <div class="inp-container">
												<input type="date" name="vdate" id="vdate" class="form-control" value="<?php echo date("Y-m-d");?>" required>
                                           	 </div>
                                           	</div>
                                           	
                                           	<div class="col-md-4 mr-b">
                                           	 <label class="control-label">Tip <span class="sub-text">Season</span></label>
                                           		<div class="inp-container">
												<select class="form-control" name="tipseason" id="tipseason" required>
													
													
												</select>
                                           		</div>
                                           	</div>
                                           	
                                          
                                           
                                         	<div class="col-md-12 mr-b">
                                         		<label>Tip   <span class="sub-text">Text</span> </label>
                                         		<textarea rows="3" class="text-ar-control" name="txttip" id="txttip" placeholder="Text ..." required></textarea>
                                         	</div>
                                         	
                                         	
                                         	
                                          	
                                        </div>
                                    
                                       
                                    </div>
                                    <div class="form-actions text-center">
                                        <button type="button" class="btn btn-success" name=cmdsave id="cmdsave"> <i class="fa fa-check"></i> Save</button>
                                        <button type="reset" class="btn btn-inverse" name="cmdclear" id="cmdclear" onclick="fnclear()" ><i class="fa fa-refresh"></i> Reset</button>
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

            


          $("#cmdsave").click(function (e) {

            var catg='';
             var maincatg='';
             var subcatg='';
             var i;
              if( $('#cmbgroupcatg :selected').length > 0){
                 
                 //var selectednumbers = [];
                 
                  i=0;
                $('#cmbgroupcatg :selected').each(function(i, selected) {
                   //selectednumbers[i] = $(selected).val();
                   if(i==0)
                       catg=$(selected).val();
                   else
                    catg=catg+","+$(selected).val();

                });
          
               }//group catg

if(catg=='')
{
    alert("Enter All The Fields Properly");
    return;
}
               if( $('#cmbmaincatg :selected').length > 0){
                 
                  i=0;
                $('#cmbmaincatg :selected').each(function(i, selected) {
                 
                   if(i==0)
                       maincatg=$(selected).val();
                   else
                    maincatg=maincatg+","+$(selected).val();

                });
          
               }//main catg
               if(maincatg=='')
{
    alert("Enter All The Fields Properly");
    return;
}

               if( $('#cmbsubcatg :selected').length > 0){
                 
                  i=0;
                $('#cmbsubcatg :selected').each(function(i, selected) {
                 
                   if(i==0)
                       subcatg=$(selected).val();
                   else
                    subcatg=subcatg+","+$(selected).val();

                });
          
               }//sub catg

               if(subcatg=='')
{
    alert("Enter All The Fields Properly");
    return;
}


               vdate=document.getElementById("vdate").value
               tdate=document.getElementById("tdate").value
               txttip=document.getElementById("txttip").value 
               season = document.getElementById("tipseason").value;
//                alert(vdate+season);
//                 if(vdate='')
//                 {
//                      alert("Enter All The Fields Properly");
//                      return;
//                 }
//                  if(vdate==null)
//                  {
//                      alert("Enter All The Fields Properly");
//                      reutrn;
//                  }
//                  if(tdate='')
//                  {
//                      alert("Enter All The Fields Properly");
//                      return;
//                  }
//                  if(tdate==null)
//                  {
//                      alert("Enter All The Fields Properly");
//                      return;
//                  }

//                  if(season=='')
//                  {
//                     alert("Enter All The Fields Properly");                    
//                     return;
//                 }

 if(txttip=='')
                  {
                     alert("Enter the Tip Text Properly");                    
                     return;
                 }
                 var formdata = {
                   'catg':catg,
                   'maincatg':maincatg,
                   'subcatg':subcatg,
                   'season':season,
                   'tdate':tdate,
                   'vdate':vdate,
                   'tip':txttip

                 };
                                   
                    $.ajax({
                        'type': 'POST',
                        'data': formdata,
                        'url': '<?php echo base_url(); ?>index.php/Welcome/savedailytips',
                        'success': function (data) {
                            
                            //alert(data);
                            console.log(data);
                             alert("Records Saved Successfully");
                             location.reload(true);
                            
    
                        }
                    });

      
           });//form submit

		$("#test-upload").fileinput({
		'theme': 'fa',
		'showPreview': false,
		'allowedFileExtensions': ['jpg', 'png', 'gif'],
		'elErrorContainer': '#errorBlock'
		});
        
        $('#cmbgroupcatg').on('change',function(){
         
            
            var optionValue = $(this).val();
                            $.ajax({
                    type:'POST',
                    url:'<?php echo base_url(); ?>index.php/Welcome/getMaincatg',
                    data:'id='+optionValue,
                    success:function(data){
                       console.log(data);
                        
                        var dataObj = jQuery.parseJSON(data);
     
                        if(dataObj){
                           
                            $(dataObj).each(function(){
                                var option = $('<option />');
                                option.attr('value', this.id).text(this.name);           
                                
                                $('#cmbmaincatg').append(option);
                                
                                $('#cmbmaincatg').multiselect('rebuild');
                                
                            });
                        }else{
                            $('#cmbmaincatg').html('<option value="">Groupcatg not available</option>');
                        }
                        
                    }
                });
         });
          

                   $('#cmbmaincatg').on('change',function(){
                     var optionValue = $(this).val();
                        $.ajax({
                    type:'POST',
                    async: true, 
                    url:'<?php echo base_url('index.php/Welcome/getSubcatg'); ?>',
                    data:'id='+optionValue,
                    success:function(data){
                       console.log(data);
                        
                        var dataObj = jQuery.parseJSON(data);
      
                        if(dataObj){
                           
                            $(dataObj).each(function(){
                                var option = $('<option />');
                                option.attr('value', this.id).text(this.name);           
                                       
                               
                                console.log("opt"+option);
                                $('#cmbsubcatg').append(option);
                                
                                $('#cmbsubcatg').multiselect('rebuild');
                                
                            });
                        }else{
                            $('#cmbsubcatg').html('<option value="">Groupcatg not available</option>');
                        }
                        
                    }
                });//sub ajax



       $.ajax({
                    type:'POST',
                    async: true, 
                    url:'<?php echo base_url('index.php/Welcome/getseason'); ?>',
                    data:'id='+optionValue,
                    success:function(data2){
                      
                        
                       console.log(data2);
                        
                        
                        var dataObj = jQuery.parseJSON(data2);
     var val='';
                        if(dataObj){
                           
                            $(dataObj).each(function(){
                                var option = $('<option />');
                                option.attr('value', this.id).text(this.name);           
                            
                                 
                                 $('#tipseason').append(option);
                                
                                
                            });
                        }else{
                            
                             $('#tipseason').html('<option value="">Season not available</option>');
                        }
                        
                        
                    }
                });//sub ajax




            
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