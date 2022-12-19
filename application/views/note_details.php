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
                              <p style="font-size: 24px;color: green;"><?php echo $noteresult[0]['doc_title'];?></p>
                            <?php 
//                            echo '<pre>';
//                            print_r($noteresult);
//                            echo '</pre>';
                            foreach($noteresult as $noteresult1){?>
                            <hr>
                          
                            <p><b>Page No:<?php echo $noteresult1['raft_page_id']; ?></b></p>
                            
                                <div class="col-md-12 note-bg"><?php echo $noteresult1['raft_note_description']; ?></div>
                                
                            <?php }
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