
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
                        <h4>Lesson Details</h4>
                        <div class="add-new"><a href="<?php echo base_url() . "Lesson/add_lesson"; ?>"><i class="fa fa-file"></i> &nbsp;Add New Lesson</a></div>
                    </div>
                    <div class="smline"></div>
                    <div class="row rnd-pd">
                        <div class="col-md-12">
                          <table id="example1" class="table table-bordered">
                                <thead>
                                    <tr class="tab-bg">
                                        <th>S.No</th>
                                        <th>Lesson Name</th>
                                        <th>Lesson Description</th>
<!--                                        <th>Total Lessons</th>-->
                                        <th>Lesson Valid From</th>
                                        <th>Lesson Valid To</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    foreach ($result as $results1) {
                                        $i++;
                                        ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $results1['bba_lesson_name']; ?></td>
                                            <td><?php echo $results1['bba_lesson_description']; ?></td>
<!--                                            <td><?php echo $results1['bba_total_lessons']; ?></td>-->
                                            <td><?php echo date('Y-m-d', strtotime($results1['bba_lesson_validfrom_date'])); ?></td>
                                            <td><?php echo date('Y-m-d', strtotime($results1['bba_lesson_validto_date'])); ?></td>
                                            <td><a href="<?php echo base_url() . "Lesson/editlessondetails/" . $results1['bba_lesson_id']; ?>" class="edit-btn">Edit</a></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

