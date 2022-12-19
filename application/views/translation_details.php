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
                        
                         <div class="col-md-3 mb-3">
                                    <label>Language</label>
                                    <input type="hidden" name="docid" id="docid" value="<?php echo $doc_id;?>" />
                                    <select name="language_id" id="language_id"  class="form-control select2"  required=""  style="width: 100%;">
                                        <option value="">Select</option>
                                        <?php
                                        foreach ($language as $languageresults1) {
                                            ?>
                                        <option value="<?php echo $languageresults1['language_id']; ?>" <?php if($lang_id==$languageresults1['language_id']){ ?> selected="" <?php } ?>><?php echo $languageresults1['language_name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                        
                        <div class="col-md-12">
                              <p style="font-size: 24px;color: green;"><?php echo $noteresult[0]['doc_title'];?></p>
                            <?php 
//                            echo '<pre>';
//                            print_r($noteresult);
//                            echo '</pre>';
                            if(count($translationresult) > 0){
                            foreach($translationresult as $transresult1){?>
                            <hr>
                          
                            <p><b>Page No:<?php echo $transresult1['raft_page_id']; ?></b></p>
                                
                                <div class="col-md-12 note-bg"><?php echo $transresult1['raft_translation_description']; ?></div>
                                
                            <?php }}else{?>
                                <div style="color: red; text-align: center; font-weight: bold; font-size: 18px;"> No result Found</div>
                          <?php  }
                            ?>
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

<script type="text/javascript">
	var autoBlur=true;
	var noPrint=true;
	var noCopy=true;
	var noScreenshot=true;
</script>

<script type="text/javascript" src="<?php echo PATHURL ?>js/noprint.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
     $(document).ready(function(){
 $('#language_id').on('change', function () {
        var id = $('#language_id').val();
        var docid=$('#docid').val();
        var url = '<?php echo base_url(); ?>/Upload/readtranslation/'+ docid + '/' + id;
        if (url) { // require a URL
            window.location = url; // redirect
        }
    });
    });
    </script>