
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
<!--				<div class="my-info">
            	<h4>User Details</h4>
				<div class="add-new"><a href="<?php echo base_url() . "Login/addnewuserdetails"; ?>">  Add New User</a></div>
				<div class="smline"></div>-->
                                
                                
                                <div class="my-info">
				<div class="cont-header">
				<h4>Quiz Details</h4>
				<div class="add-new"><a href="<?php echo base_url() . "Upload/addnewquestions"; ?>"><i class="fa fa-file"></i> &nbsp;Add New Questions</a></div>
				</div>
			<div class="smline"></div>
			<div class="row rnd-pd">
			<div class="col-md-12">
                                
                                
                                
            
                <table id="example1" class="table table-bordered">
                  <thead>
                  <tr class="tab-bg">
                    <th>S.No</th>
                    <th>Question</th>
                  
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
					<td><?php echo $results1['question']; ?></td>
					
					
					<td><a href="<?php echo base_url() . "Upload/editquizdetails/" . $results1['question_id']; ?>" class="edit-btn">Edit</a>
<!--                                        <a href="https://imagesukml.awsapps.com/workdocs/index.html#/share/document/eb1e50f4e90793c0f1059960bd699fe43fc942299899ec4d850fc7d3842add0a"  download  class="edit-btn" >Read</a>-->
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

  