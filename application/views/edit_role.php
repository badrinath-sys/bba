<div class="content-wrapper">
      
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!--Questions-->
                <div class="my-info">
                     <div class="cont-header">
                    <h4>Update Role</h4>  
                    <div class="add-new"><a href="<?php echo base_url() . "Roles/roles_creation"; ?>">  Role Details</a></div>
                     </div>
                    <div class="smline"></div>
                     <div class="row rnd-pd">
                    
                    
                    
                     <form action="<?php echo base_url() . "Roles/updaterole"; ?>" class="form-horizontal" name="frmsubcatg" id="frmsubcatg" method="post" accept-charset="utf-8">
                            <div class="row pt-12">
                            <div class="col-md-12 mb-3">
                                <label>Role Name</label>
                                <input type="hidden" name="roleid" id="roleid" class="form-control"  required=""  value="<?php echo $getroledetails[0]['role_id']; ?>" />
                                <input class="form-control" type="text" name="rolename" id="rolename" placeholder="Role Name" required="" value="<?php echo $getroledetails[0]['role_name']; ?>">
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



