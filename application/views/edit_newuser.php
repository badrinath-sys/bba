<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!--Questions-->
                <div class="my-info">
                    <div class="cont-header"> 
                        
                            <h4>Edit User</h4>  
                            <div class="add-new"><a href="<?php echo base_url() . "Login/getuserdetails"; ?>">  User Details</a></div>
         <!--                    <p><a href="<?php echo base_url() . "Login/getuserdetails"; ?>" style="text-align:right;">User Details</a></p>-->
                        </div>
                        <div class="smline"></div>
                        <div class="row rnd-pd">

                            <form action="<?php echo base_url() . "Login/updateuser"; ?>" class="form-horizontal" name="frmsubcatg" id="frmsubcatg" method="post" accept-charset="utf-8">
                                <div class="row pt-3">
                                    <div class="col-md-3 mb-3">
                                        
                                        <label>Name</label>
                                           <input  type="hidden" name="userid" id="userid"  value="<?php echo $getdetails[0]['user_id']; ?>">
                                           <input class="form-control" type="text" name="uname" id="uname"  value="<?php echo $getdetails[0]['name']; ?>" required="">
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label>Employee Id</label>
                                        <input class="form-control" type="text" name="user_id" id="user_id"  value="<?php echo $getdetails[0]['user_name']; ?>" readonly="" required="">
                                    </div>



                                    <div class="col-md-3 mb-3">
                                        <label>Role</label>

                                        <select name="role_id" id="role_id"  class="form-control select2"  required=""  style="width: 100%;">
                                            <option value="">Select</option>
                                            <?php
                                            foreach ($roleresult as $roleresults1) {
                                                ?>
                                                <option value="<?php echo $roleresults1['role_id'] . '~' . $roleresults1['role_short_name']; ?>" <?php if ($getdetails[0]['role_id'] == $roleresults1['role_id']) { ?> selected="" <?php } ?> ><?php echo $roleresults1['role_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>


                                    <div class="col-md-12 text-center mt-3 mb-3">
                                        <button class="sub-btn" type="submit"  name="submit" id="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                    <!--Questions-->
                </div>
            </div>
    </section>
</div>



