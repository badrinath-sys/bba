<link rel="stylesheet" href="<?php echo PATHURL ?>css/summernote-bs4.min.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
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
                    <div class="cont-header">
                        <h4>Document Details</h4>
<!--                        <div class="add-new"><a href="<?php echo base_url() . "Upload/addnewdocument"; ?>"><i class="fa fa-file"></i> &nbsp;Add New Document</a></div>-->
                    </div>
                    <div class="smline"></div>
                    <div class="row rnd-pd">
                        <div class="col-md-12">
                            <?php
                                    $i = 0;
                                    foreach ($documentresult as $results1) {
                                        $i++;
                                        ?>
                            <div class="col-md-12 mb-3">
                                
                                
                                
<a href="<?php echo GALLERYURL;?><?php echo $results1['doc_path'];?>">  <?php echo $results1['doc_path'];?></a>
                            </div>
                            <hr>
                                    <?php } ?>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!--All Exam-->
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
	var autoBlur=true;
	var noPrint=true;
	var noCopy=true;
	var noScreenshot=true;
        $(document).ready(function () {
            
        });
        function updatestatus(id,docid){
           
            if(id=='1'){
                
                var val='Evaluator';
            }
            if(id=='2'){
              var val='Translator';    
            }
            if(id=='4'){
               var val='Finalised';  
            }
           if (confirm('Are you sure you want this document should go to ' + val)){
               $.ajax({
                        type: 'POST',
                        url: '<?php echo base_url(); ?>Upload/updatedocstatus',
                        data: 'docid=' + docid + '&value=' + id,
                        success: function (result) {
                            //alert(result);
                            if(result==1){
                                 var url = '<?php echo base_url(); ?>Upload/documentreport/';
                                    if (url) { // require a URL
                                        window.location = url; // redirect
                                    }
                            }
                            //$('#get_note_data').html(result);
                          //  alert(result);
                         // alert("Note Created Successfully ");

                        }
                    });
           }
           else{
        //   $("input[name='trans_evalu']:radio").attr('checked', false);
            $("input[type=radio][name=trans_evalu]").prop('checked', false);
           return false;
           }
        }
</script>
<script type="text/javascript" src="<?php echo PATHURL ?>js/noprint.js"></script>