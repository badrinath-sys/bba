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
<!--                                        <th>Next Level</th>-->
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
                                            <td><?php echo 'English'; //echo $results1['doc_language'];     ?></td>
                                            <td><?php echo $results1['doc_title']; ?></td>
                                            <td><?php echo $results1['doc_description']; ?></td>
    <!--                                            <td><?php echo $results1['doc_keywords']; ?></td>-->
                                            <td>

                <!--                                                <a href="<?php echo base_url() . "Upload/readpdf"; ?>/<?php echo $results1['doc_id']; ?>" class="edit-btn" >Read</a>
                                                                <a href="<?php echo base_url() . "Upload/video_doc"; ?>/<?php echo $results1['doc_id']; ?>" class="edit-btn" >More Documents</a>-->

                                                <a class="edit-btn" data-toggle="modal" data-target="#course-more-info<?php echo $results1['doc_id']; ?>">Documents</a>

                                                <div class="modal fade bd-example-modal-lg" id="course-more-info<?php echo $results1['doc_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Course Title</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <table class="table table-bordered">
                                                                    <tr class="tab-bg">
                                                                        <td>Video</td>
                                                                        <td>Audio</td>
                                                                        <td>Pdf</td>

                                                                    </tr> 
                                                                    <?php
                                                                    $documentresult = $this->Upload_model->getmoredocumentdetails($results1['doc_id']);

                                                                    $i = 0;
                                                                    foreach ($documentresult as $results1) {
                                                                        $i++;
                                                                        ?>
                                                                        <tr>
                                                                            <td> 
                                                                                <?php if ($results1['doc_type'] == 2) { ?>
                                                                                    <a href="<?php echo GALLERYURL; ?><?php echo $results1['doc_path']; ?>"> Video <?php echo  $i;?></a>
                                                                                <?php }else{ echo '----'; } ?></td>
                                                                            <td>
                                                                                <?php if ($results1['doc_type'] == 3) { ?>

                                                                                    <a href="<?php echo GALLERYURL; ?><?php echo $results1['doc_path']; ?>"> Audio <?php echo  $i;?></a>
                                                                                <?php }else {
                                                                                    echo '----';
                                                                                } ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php if($i==1){ ?>
                                                                                <a href="<?php echo base_url() . "Upload/readpdf"; ?>/<?php echo $results1['doc_id']; ?>" class="edit-btn" >Read</a>
                                                                                <?php } ?>
                                                                            </td>

                                                                        </tr>
                                                                    <?php } ?>
                                                                </table>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
    var autoBlur = true;
    var noPrint = true;
    var noCopy = true;
    var noScreenshot = true;
    $(document).ready(function () {

    });
    function updatestatus(id, docid) {

        if (id == '1') {

            var val = 'Evaluator';
        }
        if (id == '2') {
            var val = 'Translator';
        }
        if (id == '4') {
            var val = 'Finalised';
        }
        if (confirm('Are you sure you want this document should go to ' + val)) {
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url(); ?>Upload/updatedocstatus',
                data: 'docid=' + docid + '&value=' + id,
                success: function (result) {
                    //alert(result);
                    if (result == 1) {
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
        else {
            //   $("input[name='trans_evalu']:radio").attr('checked', false);
            $("input[type=radio][name=trans_evalu]").prop('checked', false);
            return false;
        }
    }
</script>
<script type="text/javascript" src="<?php echo PATHURL ?>js/noprint.js"></script>