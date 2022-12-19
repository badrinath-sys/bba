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
                        
                        <li><a href="#" class="has-arrow" ><i class="fa fa-newspaper-o"></i><span class="hide-menu"> Article Info</span></a>
                             <ul aria-expanded="false" class="collapse">
                                 <li><a href="javascript:void(0)" onclick="fnarticle()">New Article</a></li>
                                <li><a href="javascript:void(0)" onclick="fnarticlestatus()">Article Status</a></li>
                            </ul>
                        </li>
                        
                      <!--   <li> <a class="has-arrow " href="#" aria-expanded="false"><i class="fa fa-image"></i><span class="hide-menu">Gallerys</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li class="active"><a href="photo-gallery.html">Photo Gallery</a></li>
                                <li><a href="video-gallery.html">Video Gallery</a></li>
                                
                            </ul>
                        </li> -->
                       <li > <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Contributors</span></a>
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
                        
                         <li class="active"> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-bell"></i><span class="hide-menu">Push notification </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="javascript:void(0)" onclick="fnpushnote()">Notification Entry</a></li>                              
                                <li><a href="javascript:void(0)" class="active" onclick="fnpushreport()">Notification Report</a></li>   
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
                    <h5 class="text-primary">Push Notifications Report</h5> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Contributors</a></li>
                        <li class="breadcrumb-item active">Contributors Reports</li>
                         <li><a data-toggle="collapse" class=" filters-bg" href="#collapseExample"  aria-haspopup="true" aria-expanded="false"><i class="fa fa-filter"></i></a></li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            
                        <!--filters-->     
                        <div class="col-md-12" style="z-index: 9999999">
                        <div class="filters-cont">
                        <form action="<?php echo base_url() . "index.php/Welcome/pushreport"?>" name="contrep" id="contrep" method="post">
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
                        <label class="control-label">Contributors<span class="sub-text">  Name</span></label>
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
                        <label class="control-label">Bank <span class="sub-text">Type</span></label>
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
                        <label class="control-label">Date  <span class="sub-text">Period</span></label>
                        <div class="clearfix"></div>
                        <div class="f-cal-cont"><input type="text" class="input-calendar form-control" placeholder="YY-MM-DD -  YY-MM-DD"></div>
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
                        </div>
                        <!--filters--> 
                        
                        <div class="col-lg-12">
                          
                              <div class="card">
                            <div class="card-body">
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                               <th>Language</th>
                                              <!--   <th>Group Category</th> 
                                                <th>Main Category</th>                                               
                                                <th>Sub Category</th> -->
                                                <th>From Period</th>
                                                <th>To Period</th> 
                                                <th>Titley</th>                                               
                                                <th>Description</th>
                                                <th>Entry By</th>
                                                <th>Entry Date</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                               <th>Language</th>
                                               <!--  <th>Group Category</th> 
                                                <th>Main Category</th>                                               
                                                <th>Sub Category</th> -->
                                                <th>From Period</th>
                                                <th>To Period</th> 
                                                <th>Titley</th>                                               
                                                <th>Description</th>
                                                <th>Entry By</th>
                                                <th>Entry Date</th>
                                                
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                                  foreach($contrep as $k=>$v){?>
                                            <tr>      
                                                  <td><?php echo $v['lang'];?> </td>
                                                 <!--  <td><?php  //echo $v['catg'];?> </td>
                                                   <td><?php //echo $v['mcatg'];?> </td> 
                                                  <td><?php //echo $v['scatg'];?> </td> -->
                                                   <td><?php echo $v['from'];?> </td>
                                                   <td><?php echo $v['to'];?> </td>
                                                   <td><?php echo $v['title'];?> </td>
                                                   <td><?php echo $v['desc'];?> </td>
                                                   <td><?php echo $v['entry'];?> </td>
                                                   <td><?php echo $v['dt'];?> </td> 
                                                   
                                                </tr>
                                             

                         <?php }?>
                                     
                                        </tbody>
                                        <div>&nbsp;</div>
                                    </table>
                                    
                                </div>
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
    
    <!--data table-->
    <script src="<?php echo base_url(); ?>assets/js/lib/datatables/datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/datatables/datatables-init.js"></script>
    
    
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
        
        <!--calender-->
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