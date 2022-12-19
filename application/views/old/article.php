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
                        
                        <li class="active"><a class="has-arrow" href="#"  aria-expanded="false"><i class="fa fa-newspaper-o"></i><span class="hide-menu"> Article Info</span></a>
                             <ul aria-expanded="false" class="collapse">
                                <li><a href="javascript:void(0)" class="active" onclick="fnarticle()">New Article</a></li>
                                <li><a href="javascript:void(0)" onclick="fnarticlestatus()">Article Status</a></li>
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
                    <h5 class="text-primary">Article </h5> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Article Info</a></li>
                        <li class="breadcrumb-item active">New Article</li>
                        <li><a data-toggle="collapse" class=" filters-bg" href="#collapseExample"  aria-haspopup="true" aria-expanded="false"><i class="fa fa-filter"></i></a></li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            
          
             
            
                        <!-- Container fluid  -->
                        <div class="col-md-12" style="z-index: 999999;">
                            
                        <!--filters-->     
                
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
                        <label class="control-label">Date<span class="sub-text"> Period</span></label>
                        <div class="clearfix"></div>
                        <div class="f-cal-cont"><input type="text" class="input-calendar form-control" placeholder="YY-MM-DD -  YY-MM-DD"></div>
                        <div class="cal-icon"><i class="fa fa-calendar cal-icon"></i></div>
                        </div>
                        </div>

                        <div class="col-md-4">
                        <div class="form-group">
                        <label class="control-label">To <span class="sub-text">Date</span></label>
                        <div class="clearfix"></div>
                        <div class="f-cal-cont"><input type="text" class="normal-calendar form-control " placeholder="YY-MM-DD"></div>
                        <div class="cal-icon"><i class="fa fa-calendar cal-icon"></i></div>
                        </div>
                        </div>

                        <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-info"><i class="fa fa-send"></i> Submit</button>
                        <button type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i> Reset</button>
                        </div>


                        <div>&nbsp;</div>

                        </div>

                        </div>
                        </form>
                        </div>

                        <!--filters--> 
                        </div>
                    
                        <div class="col-lg-12">
                            <div class="card card-outline-primary">                           
                            <div class="card-body">
                                <form action="<?php echo base_url() . "index.php/Welcome/saveuploadarticle" ?>" class="form-horizontal" name="frmarticle" id="frmarticle" method="post" enctype="multipart/form-data" accept-charset="utf-8">
                                    <div class="form-body">
                                         <?php
                                        $dat=$this->session->flashdata('slider_status');
                                        print_r($dat);
                                        ?>

                                        <div class="row p-t-20">
                                           
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="control-label">Article <span class="sub-text">Language</span></label>
                                                <div class="clearfix"></div>
                                                <div class="inp-container">
                                                 <select class="form-control" name="lang" id="lang" required>
                                                   <?php foreach($lang as $k=>$v){?>
                                                          <option value=<?php echo $v['id'];?>><?php echo $v['name'];?></option>
                                                        <?php }?>
                                                </select>
                                                </div>
                                                </div>
                                            </div>
                                            
                                           
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Group  <span class="sub-text">Category</span></label>
                                                        <div class="clearfix"></div>
                                                       <select class="example-enableFiltering-includeSelectAllOption" multiple="multiple" id="cmbcatg" name="cmbcatg" required>
                                                        <?php foreach($catg as $k=>$v){?>

                                                            <option value=<?php echo $v['id'];?>><?php echo $v['name'];?></option>
                                                        <?php }?>
                                                        </select>
                                                 </div>
                                            </div>
                                            
                                           <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Main  <span class="sub-text">Category</span></label>
                                                        <div class="clearfix"></div>
                                                    <select class="example-enableFiltering-includeSelectAllOption" multiple="multiple" name="cmbmaincatg" id="cmbmaincatg" required>
                                                        
                                                        </select>
                                                 </div>
                                            </div>
                                            
                                             <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Sub <span class="sub-text">Category</span></label>
                                                        <div class="clearfix"></div>
                                                     <select class="example-enableFiltering-includeSelectAllOption" multiple="multiple" id="cmbsubcatg" name="cmbsubcatg" required>
                                                     
                                                        </select>
                                                 </div>
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label"> <span class="sub-text">Gender</span></label>
                                                        <div class="clearfix"></div>
                                                        <div class="float-left gender-box"><input type="radio" name="gender" id="gender"><i class="fa fa-male fa-1x fa-mr"></i></div>
                                                        <div class="float-left gender-box"><input type="radio" name="gender" id="gender"><i class="fa fa-female fa-1x fa-mr"></i></div>
                                                 </div>
                                            </div>
                                            
                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">Age <span class="sub-text"> Group</span></label>
                                                <div class="clearfix"></div>
                                                <div class="inp-container">
                                                 <input type="text" name="age" id="age" class="form-control" maxlength=2 required onkeypress="return isNumberKey(event)">
                                                </div>
                                            </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Article Title <span class="sub-text">(English)</span></label>
                                                     <input type="text" name="title1" id="title1" class="form-control" required>
                                                 </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <label class="control-label">Article Title   <span class="sub-text" id="arttext" name="arttext">(Telugu)</span></label>
                                                     <div >
                                                         <input type="text" id="title" name="title" required>
                                                         <input type="hidden" name="lbltitle" id="lbltitle">

                                                     </div>
                                                 </div>
                                            </div>
                                            
                                            <div class="col-md-12 mr-b">
                                             <label class="control-label">Article<span class="sub-text"> Description</span></label>
                                                <div>
                                                <input type="text" id="editor" name="editor" required>
                                                         <input type="hidden" name="lbleditor" id="lbleditor" required>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                             <label class="control-label">Featured  <span class="sub-text">Image</span></label>
                                            <select class="form-control" id="fimg" name="fimg" required>
                                                <option>Different sizes Images</option>
                                                <option>360*180</option>
                                                <option>180*180</option>
                                                <option>360*360</option>
                                             </select>
                                            <!-- <input type="file" name="newfile1" id="newfile1[]"  class="inputfile inputfile-6"> -->
                                           <!--  <div style="margin-top: 15px;">
                                            <div class="img-inp-cont">
                                            <input type="file" name="newfile[]" id="newfile[]" class="inputfile inputfile-6" required data-multiple-caption="{count} files selected" multiple />
                                            <label for="newfile[]"><span></span> <strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> Image Upload &hellip;</strong></label>
                                            </div>
                                            
                                            <div class="img-add-cont">
                                                <div class="pull-left mr-r"><button  class="btn btn-dark" name="add" id="add"><i class="fa fa-plus"></i></button></div>
                                                <div class="pull-left"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></div>
                                            </div>
                                            
                                            </div> -->
                                            <div style="margin-top: 15px;">
                                            <div class="img-inp-cont">
                                                <div class="fuatured-imgs">
                                                <input type="file" name="newfile[]" id=newfile[] class="file-control"> <!--<input type="button" class="btn btn-dark btnAdd" value="Add"><br>-->                        
                                                <button type="button"  class="btn btn-dark btnAdd"><i class="fa fa-plus"></i></button>

                                                </div>
                                            </div>
                                            
                                            
                                            
                                            </div>
                                            
                                            </div>
                                            
                                            <div class="col-md-6">
                                             <label class="control-label">Video  <span class="sub-text">Type</span></label>
                                            <div class="clearfix"></div>
                                                 <select class="form-control" id="vlink" name="vlink" required>
                                                    <option>Please Select Video Type</option>
                                                    <option>facebook</option>
                                                    <option>twitter</option>
                                                    <option>youtube</option>
                                                 </select>
                                                
                                               <!--  <div class="video-link-main">
                                                <div class="video-link-cont">
                                                     <input type="text" name="flinks" id="flinks" class="form-control" placeholder="Facebook link...." required>
                                                </div>
                                                <div class="img-add-cont">
                                                <div class="pull-left mr-r"><button class="btn btn-dark"><i class="fa fa-plus"></i></button></div>
                                                <div class="pull-left"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></div>
                                                </div>
                                                </div> -->

                                                <div class="video-link-main">
                                                <div class="video-type">
                                                <input type="text" name="flinks" id="flinks" class="file-control"> <!--<input type="button" class="btn btn-dark btnAdd" value="Add"><br>-->                        
                                                <button type="button"  class="btn btn-dark Vtype"><i class="fa fa-plus"></i></button>
                                                </div>
                                                </div>



                                            </div>
                                            
                                        

                                             <div class="col-md-12 mr-b mr-t">
                                             <label class="control-label">Tags / <span class="sub-text">Keywords</span></label>
                                                <div class="tags">
                                                <input type="text" name="links" id="links" class="tag-control"> <!--<input type="button" class="btn btn-dark btnAdd" value="Add"><br>-->                     
                                                <button type="button"  class="btn btn-dark tags-add"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4 mr-b mr-t">
                                             <label class="control-label">Author  <span class="sub-text"></span></label>
                                                <select class="form-control" id="authsel" name="authsel" required>
                                                    <option>Employee</option>
                                                    <option>Self</option>
                                                    <option>Contributor</option>
                                                </select>
                                            </div>
                                            
                                            <div class="col-md-4 mr-b mr-t">
                                             <label class="control-label">Emp Code <span class="sub-text"></span></label>
                                                <input type="text" name="empcode" id="empcode" class="form-control" maxlength=10 required onkeypress="return isNumberKey(event)">
                                            </div>
                                            
                                            <div class="col-md-4 mr-b  mr-t">
                                             <label class="control-label">Author Name <span class="sub-text"></span></label>
                                                 <input type="text" name="authname" id="authname" class="form-control" required>
                                            </div>
                                            
                                        </div>
                                       
                                       
                                       
                                       
                                       
                                    </div>
                                    <div class="form-actions text-center">
                                        <button type="submit" class="btn btn-success" onclick="fntitle()"> <i class="fa fa-check"></i> Save</button>
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
        $(document).ready(function() {

             $('.btnAdd').click (function () {       
                    $('.fuatured-imgs').append('<div><input type="file" name="newfile[]" id="newfile[]" class="file-control"> <button type="button" class="fileRemove btn btn-danger"><i class="fa fa-trash"></i></button></div>'); // end append
                    $('div .fileRemove').last().click (function () { 
                        $(this).parent().last().remove();    
                    }); // end click
                }); // end click        

                /*add links*/
                $('.Vtype').click (function () {       
                    $('.video-type').append('<div><input type="text" name="txt" class="file-control"> <button type="button" class="btnRemove btn btn-danger"><i class="fa fa-trash"></i></button></div>'); // end append
                    $('div .btnRemove').last().click (function () { 
                        $(this).parent().last().remove();    
                    }); // end click
                }); // end click                
                
                 $('.tags-add').click (function () {       
                    $('.tags').append('<div><input type="text" name="txt" class="tag-control"> <button type="button" class="tagRemove btn btn-danger"><i class="fa fa-trash"></i></button></div>'); // end append
                    $('div .tagRemove').last().click (function () { 
                        $(this).parent().last().remove();    
                    }); // end click
                }); // end click                
        

        $('.example-enableFiltering-includeSelectAllOption').multiselect({
            includeSelectAllOption: true,
            enableFiltering: true
        });
        });
        </script>
        
        <script>
            initSample();
        </script>
        
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
        
        <!--logos-->
        <script type="text/javascript">
                $(document).ready(function(){

                    $("#lang").change(function(){
                        var dropdown = $("#lang");
                        var selectedText = dropdown.find("option:selected").text();

                         document.getElementById("arttext").innerHTML=selectedText;
                            return;
            
                    });
                    var dropdown = $("#lang");
                    var selectedText = dropdown.find("option:selected").text();
                     document.getElementById("arttext").innerHTML=selectedText;
                    
                    $('#frmarticle').submit(function(){
 

                    var data1 = CKEDITOR.instances.title.getData();
                    var desc = CKEDITOR.instances.editor.getData();

                // place the data in hidden text area, when form si submited hidden data will autometically comes in post method
                
            

                document.getElementById("lbltitle").value=data1;
                document.getElementById("lbleditor").value=desc;
    
                var tit= document.getElementById("lbltitle").value
                var d= document.getElementById("lbleditor").value
    
    //return false;
                    });

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

                 $('#cmbcatg').on('change',function(){
         //alert(document.getElementById("dt").value);
            
                   var optionValue = $(this).val();
                   if (optionValue==null)
                   {
                       optionValue=0;
                       data = "";
                       $("#cmbmaincatg").html(data);
                       $("#cmbmaincatg").multiselect('rebuild');
                      
                       return;
                   }

                    
                   $.ajax({
                    type:'POST',
                    url:'<?php echo base_url(); ?>/index.php/Welcome/getMaincatg',
                    data:'id='+optionValue,
                    success:function(data){
                       console.log(data);
                        
                        var dataObj = jQuery.parseJSON(data);
                        
                        if(dataObj){
                           
                            $(dataObj).each(function(){
                                var option = $('<option />');
                                option.attr('value', this.id).text(this.name);           
                               alert(option);
                               alert(this.id);
                                $('#cmbmaincatg').append(option);
                                
                                $('#cmbmaincatg').multiselect('rebuild');
                                
                            });
                        }else{
                            $('#cmbmaincatg').html('<option value="">Groupcatg not available</option>');
                        }
                        
                    }
                });
         });//group end


                  $('#cmbmaincatg').on('change',function(){
                     var optionValue = $(this).val();

                      if (optionValue==null)
                   {
                       optionValue=0;
                       data = "";
                       $("#cmbsubcatg").html(data);
                       $("#cmbsubcatg").multiselect('rebuild');
                      
                       return;
                   }
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

});//main end

                });//document
            </script>

</body>

</html>