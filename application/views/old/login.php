<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="etv-bharat">
    <meta name="author" content="Suresh">
    <meta name="Copyright" content="©All rights reserved for MC">
    <meta name="Keywords" content="etv bharat, etv food,etv mahila bharat,young bharat">
      <link href="<?php echo base_url(); ?>assets/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/images/favicon.png">
    <title>Etv-Bharat</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/helper.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script>
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
 function fnarticle()
        {
            
//         window.location='<?php //echo site_url(); ?>index.php/Welcome/article';    
        window.location= '<?php echo base_url(); ?>index.php/Welcome/article/articlemeta';         }
        //window.location='<?php //echo base_url(); ?>index.php/Welcome/article/articlemeta';   


    </script>
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">

        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="login-content card">
                            <div class="login-form">
                               <div class="text-center"><img src="<?php echo base_url(); ?>assets/images/logo.png"></div>
                                <h2>User Sign In</h2>
                                  <form action="#" name="frmlogin" id="frmlogin" method="post">
                                    <div class="form-group">
                                        <!--<label>Employee ID</label>-->
                                        <input type="number" class="form-control" placeholder="Employee ID" name="ecode" id="ecode" onkeypress="return isNumberKey(event)" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <!--<label>Password</label>-->
                                        <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Password">
                                    </div>
                                   <!-- <div class="checkbox">
                                        <label>
        										<input type="checkbox"> Remember Me
        									</label>
                                        <label class="pull-right">
        										<a href="#">Forgotten Password?</a>
        									</label>

                                    </div>-->
                                    <button type="button" class="btn btn-primary btn-flat m-b-10 "  name="cmdsignin" id="cmdsignin">Sign in</button>
                                         <!--  <div class="row">
                                    <div class="col-sm-12 text-center ">	
                                    <h5 class="line">Connect With</h5>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div style="margin: auto;">
                                    <ul>
                                    	<li class="float-left"><a href="#" class="fb"><i class="fa fa-facebook"></i></a></li>
                                    	<li class="float-left"><a href="#" class="gp"><i class="fa fa-google-plus"></i></a></li>
                                    	<li class="float-left"><a href="#" class="twit"><i class="fa fa-twitter"></i></a></li>
                                    </ul>
                                    </div>
                                   	
                                   
                                    </div>
                                    
                                    <div class="register-link m-t-15 text-center">
                                        <p>Don't have account ? <a href="#" >  Sign Up Here</a></p>
                                    </div> -->                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="<?php echo base_url(); ?>assets/js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url(); ?>assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url(); ?>assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/custom.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/lib/jquery/jquery.min.js"></script>

    <script type="text/javascript">
                $(document).ready(function(){
                     $("#cmdsignin").click(function (e) {

                          ecode=document.getElementById("ecode").value
                          pwd=document.getElementById("pwd").value

                          var formdata = {
                              'ecode':ecode,
                               'pwd':pwd
                    };  
   
                        if ($("#ecode").val().trim() === "" && $("#ecode").val().trim().length === 0) {
                    alert(' Enter UserName');
                    return false;
                }
                if ($("#pwd").val().trim() === "" && $("#pwd").val().trim().length === 0) {
                    alert('Enter Password');
                    return false;
                }

                        $.ajax({
                       'type': 'POST',
                       'data': formdata,
                       'dataType':'json',
                        'url': '<?php echo base_url();?>index.php/Welcome/getlogin',
                        'success': function (data) {
                            
                            
                            console.log(data);
                             if (data==true)
                            {   
                               alert("Login Sucessfully");
                               window.location.href='<?php echo base_url();?>index.php/Welcome/article/articlemeta';
                            }
                            else{
                                alert("Invalid Userid or password");
                            }
             
             
                          
                           
                        }
                   });
                     });
                });
            </script>

</body>

</html>