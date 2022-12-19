

<div class="content-wrapper">

    <!-- Main content -->
<!--    <section class="content">
        <div class="row">
            <div class="col-md-12">
                Questions
                <div class="my-info">
                    <h4>Assign Role</h4>  
                    <div class="add-new"><a href="<?php echo base_url() . "Login/getuserdetails"; ?>">  User Details</a></div>

                    <div class="smline"></div>
                     <form action="<?php echo base_url() . "Login/saverole"; ?>" class="form-horizontal" name="frmsubcatg" id="frmsubcatg" method="post" accept-charset="utf-8">
                            <div class="row pt-3">
                            

                            <div class="col-md-12 mb-3">
                                <label>Role</label>

                                <select name="role_id" id="role_id"  class="form-control select2"  required=""  style="width: 100%;">
                                    <option value="">Select</option>
    <?php
    foreach ($roleresult as $roleresults1) {
        ?>
                                                    <option value="<?php echo $roleresults1['role_id'] . '~' . $roleresults1['role_short_name']; ?>"><?php echo $roleresults1['role_name']; ?></option>
    <?php } ?>
                                </select>
                            </div>
    <?php
    foreach ($menuresult as $menuresult1) {
        $menuid = $menuresult1['raft_main_menuid'];
        $submenu = $this->Admin_model->getsubmenudetails($menuid);
        ?>
                                            <div class="col-md-12 mb-3">
                                               <label><?php echo $menuresult1['raft_main_menuname']; ?></label>  
        <?php foreach ($submenu as $submenuresult1) { ?>
                                                           <div class="col-md-2 mb-3">
                                                           <label> <?php echo $submenuresult1['raft_submenu_menuname']; ?> </label>  
                                                          <input type="checkbox">
                                                        </div> 
        <?php } ?>
                                            </div>  
    <?php } ?> 

                            </div>
                        </form>
                    </div>
                Questions
            </div>
        </div>
    </section>-->

    <section class="content">


        <div class="row">

            <div class="col-md-12 mt-4">

                <!--Questions-->
                <div class="my-info">
                    <div class="cont-header">
                        <h4>Assign Role</h4>
<!--				<div class="add-new"><a href="add-new-user.html"><i class="fa fa-file"></i> &nbsp;User Details</a></div>-->
                    </div>
                    <div class="smline"></div>
                    <form action="<?php echo base_url() . "Roles/saveassignrole"; ?>" class="form-horizontal" name="frmsubcatg" id="frmsubcatg" method="post" accept-charset="utf-8">
                    <div class="row rnd-pd">
                        <div class="col-md-12 mb-3">
                            <label>User ID</label>
                            <select class="form-control select2"  name="role_id" id="role_id" style="width: 100%;" required="">
                                <option value="">Select</option>
                                <?php foreach ($roleresult as $roleresults1) { ?>
                                    <option value="<?php echo $roleresults1['role_id']; ?>"><?php echo $roleresults1['role_name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <?php
                        $k=0;
                        foreach ($menuresult as $menuresult1) {
                            $k++;
                            $menuid = $menuresult1['raft_main_menuid'];
                            $submenu = $this->Admin_model->getsubmenudetails($menuid);
                            ?>
                            <div class="col-md-4 mt-3">
                                <div class="from-sm-box">
                                    <div class="sm-box-head"><input type="checkbox" name="maincheck[]" id="maincheck<?php echo $k;?>" value="<?php echo $menuid; ?>" > &nbsp; <span><?php echo $menuresult1['raft_main_menuname']; ?></span></div>

                                    <ol>
                                        <?php 
                                        $s=0;
                                        
                                        foreach ($submenu as $submenuresult1) {
                                            $submenuid=$submenuresult1['raft_submenu_menuid'];
                                            $s++;?>
                                            <li><input type="checkbox" name="subcheck[]" id="subcheck<?php echo $s;?>" value="<?php echo $submenuid; ?>"> &nbsp; <?php echo $submenuresult1['raft_submenu_menuname']; ?> &nbsp;  </li>
                                        <?php } ?>
                                    </ol>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="col-md-12 text-center pt-30">
                            <button class="sub-btn">Submit</button>
                        </div>
                    </div>
                    </form>
                </div>
                <!--Questions-->


            </div>

        </div>



    </section>

</div>



