<link rel="stylesheet" type="text/css" href="print.css" media="print" />
<style type="text/css" media="print">
BODY {display:none;visibility:hidden;}
@media print {
  html, body {
    display: none;  /* hide whole page */
  }
}
</style>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My PDF Viewer</title>
      
		
	</style>

    </head>
    <body>


        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <!--All Exam-->
                    <div class="col-md-12" id="test">
                        <div class="my-info">
                            <div class="cont-header" >
                                <h4><?php echo $title; ?>
                                    <span class="info-icon"><i class="fa fa-info"></i></span>
                                </h4>
                                <div class="add-new"></div>
                            </div>
                            <p id="test">test</p>
							<?php  echo $_SERVER['HTTP_HOST'];
							$agent=explode('/',$_SERVER['HTTP_USER_AGENT']);
							$agen= $agent[3];
							$twoage=explode(' ',$agen);
							echo $twoage[1];
							 echo  "<br>";           
                            foreach ($_SERVER as $k=>$v)
                            echo $k . "=>" . $v . "<br>";                  
                                                        
                                                       ?>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!--All Exam-->
                </div>
            </section>
            <!-- /.content -->
        </div>
		
    </body>
</html>
<script type="text/javascript">
	var autoBlur=true;
	var noPrint=true;
	var noCopy=true;
	var noScreenshot=true;
</script>
<script type="text/javascript" src="<?php echo PATHURL ?>js/noprint.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
window.onclick = function(event) {
		var target = event.target;
		console.log(target.matches);
		//console.log(event);
        if (target.matches('.clickableBtn')) {
         alert('Called Classsname clickableBtn');
        }
		if (target.matches('#qidirish')){
			alert('Called identifer qidirish');
		}
}


</script>