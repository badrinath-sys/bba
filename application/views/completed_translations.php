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
                            <table id="example1" class="table table-bordered">
                                <thead>
                                    <tr class="tab-bg">
                                        <th>S.No</th>
                                        <th>Language</th>
                                        <th>Title</th>
                                        <th>Description</th>
<!--                                        <th>Keywords</th>-->
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    foreach ($documentresult as $results1) {
                                        $i++;
                                        ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo 'English'; //echo $results1['doc_language']; ?></td>
                                            <td><?php echo $results1['doc_title']; ?></td>
                                            <td><?php echo $results1['doc_description']; ?></td>
<!--                                            <td><?php echo $results1['doc_keywords']; ?></td>-->
                                            <td>
<!--                                                <a href="<?php echo PDFURL.$results1['doc_path']; ?>" class="edit-btn" target="_blank">Read</a>-->
                                                <a href="<?php echo base_url() . "Upload/readtranslation"; ?>/<?php echo $results1['doc_id']; ?>/1" class="edit-btn" >Read Translation</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
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