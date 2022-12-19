<div class="content-wrapper">
      
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!--Questions-->
                <div class="my-info">
                     <div class="cont-header">
                    <h4>Add New User</h4>  
                    <div class="add-new"><a href="<?php echo base_url() . "Login/getuserdetails"; ?>">  User Details</a></div>
                     </div>
                    <div class="smline"></div>
                     <div class="row rnd-pd">
                    
                    
                    
                     <form action="<?php echo base_url() . "Login/saveuser"; ?>" class="form-horizontal" name="frmsubcatg" id="frmsubcatg" method="post" accept-charset="utf-8">
                            <div class="row pt-3">
                            <div class="col-md-3 mb-3">
                                <label>Name</label>
                                <input class="form-control" type="text" name="uname" id="uname" placeholder="User Name" required="">
                            </div>

                            <div class="col-md-3 mb-3">
                                <label>Employee Id</label>
                                <input class="form-control" type="text" name="user_id" id="user_id"  placeholder="Employee Id" required="">
                            </div>

                            <div class="col-md-3 mb-3">
                                <label>Password</label>
                                <input class="form-control" type="text" name="password" id="password"  placeholder="Password" required="">
                            </div>

                            <div class="col-md-3 mb-3">
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



