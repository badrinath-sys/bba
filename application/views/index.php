<?php  //$browser  = $_SERVER['HTTP_USER_AGENT'];
//$browser = get_browser(null, true);
//print_r($browser);
// if (strpos($browser,'Mozilla') !== false) {
          //  echo 'You are using Mozilla';
        //} else {
             // echo 'You are not using Mozilla';
           // }
		   //echo $_SERVER['HTTP_USER_AGENT'];
  //$browser = get_browser();
  //print_r($browser);
  
  
 //explode($_SERVER['HTTP_USER_AGENT']);
 $agent=explode('/',$_SERVER['HTTP_USER_AGENT']);
							$agen= $agent[3];
							$twoage=explode(' ',$agen);
						if($twoage[1]!='SEB'){
  function get_browser_name($user_agent){
    $t = strtolower($user_agent);
    $t = " " . $t;
    if     (strpos($t, 'opera'     ) || strpos($t, 'opr/')     ) return 'Opera'            ;   
    elseif (strpos($t, 'edge'      )                           ) return 'Edge'             ;   
    elseif (strpos($t, 'chrome'    )                           ) return 'Chrome'           ;   
    elseif (strpos($t, 'safari'    )                           ) return 'Safari'           ;   
    elseif (strpos($t, 'firefox'   )                           ) return 'Firefox'          ;   
    elseif (strpos($t, 'msie'      ) || strpos($t, 'trident/7')) return 'Internet Explorer';
	elseif (strpos($t, 'seb'    )                           ) return 'SEB'           ;   
    return 'Unkown';
}
    $browname=get_browser_name($_SERVER['HTTP_USER_AGENT']);//Chrome
	if($browname=='Chrome'){	   
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BBA</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo PATHURL ?>css/all.min.css">
 
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo PATHURL ?>css/adminlte.min.css">
	
  <!-- my style -->
  <link rel="stylesheet" href="<?php echo PATHURL ?>css/my_bba.css">
  
</head>
<body>

	
<div class="logo-main">
	<div class="container">
		<form action="<?php echo base_url() . "NewLogin/getlogindetails"; ?>" class="form-horizontal" name="frmsubcatg" id="frmsubcatg" method="post" accept-charset="utf-8">
		<div class="col-md-4 col-lg-4 offset-8" >
			<div class="login-box">
				<div class="log-logo"><img src="<?php echo PATHURL ?>images/bba-logo.png" width="100%" alt="logo"></div>
				<h3>Login</h3>
				<div style="margin-top: 20px;">
					
				<div class="col-md-12 mb">
					<div class="login-icon"><img src="<?php echo PATHURL ?>images/login-user.png"></div>
					<div class="login-usr-inps"><input type="text" name="name" id="name" class="form-inp" placeholder="User Name"></div>
				</div>
				<div class="col-md-12 mb">
						<div class="login-icon"><img src="<?php echo PATHURL ?>images/icon-psw.png"></div>
					<div class="login-usr-inps"><input type="password" name="password" id="password" class="form-inp" placeholder="******"></div>
				</div>
				<div class="col-md-12"><button class="login-btn" name="submit"  type="submit">Login</button></div>
				<div class="copy-r">Powered by margadarsi computers &#169 2022 all rights reserved</div>
				</div>
			</div>
		</div>
       </form>
        </div>
</div>
  
	
	
<!-- jQuery -->
<script src="<?php echo PATHURL ?>js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo PATHURL ?>js/bootstrap.bundle.min.js"></script>

	
<!-- jQuery Knob -->
<script src="<?php echo PATHURL ?>js/jquery.knob.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo PATHURL ?>js/sparkline.js"></script>

<!-- AdminLTE App -->
<script src="<?php echo PATHURL ?>js/adminlte.min.js"></script>

<!-- Page specific script -->

</body>
</html>
	<?php } else{  
	echo 'Supports only Google chrome and Edge';
						}}else{
							echo  'Supports only Google chrome and Edge';
						}
							?>
