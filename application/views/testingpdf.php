<script type="text/javascript">
	var autoBlur=true;
	var noPrint=true;
	var noCopy=true;
	var noScreenshot=true;
</script>
<script type="text/javascript" src="<?php echo PATHURL ?>js/noprint.js"></script>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My PDF Viewer</title>
        <style>
            body{
                background: black;
                margin:0px;
            }
            .pagination{
                background: #ffffff;
                width: 100%;
                float: left;
            }
            .pagination .wrap{
                float:right;
                width: 100%;
            }
            #the-canvas {
                border: 1px solid black;
                direction: ltr;
                margin: 0 auto;
                display: block;
                width: 100%;
            }

            .pdg-btns {
                margin-bottom: 10px;
                background: #f8c404;
                color: #fff;
                border: #c79e05 2px solid;
                padding: 5px 15px;
            }

            .pdg-btns:hover{
                color: #000;
            }

            .pag-count{
                text-align:center;
                margin-top: -20px;
                color: #000;
                font-weight: 600;
            }

            .mid-prev {
                position: absolute;
                top: 50%;
                left: -15px;
                background: #333;
                padding: 10px 16px;
                border-radius: 50%;
            }

            .mid-next{
                position: absolute;
                top: 50%;
                right: -15px;
                background: #333;
                padding: 10px 16px;
                border-radius: 50%;
            }

            .mid-prev a ,.mid-next a{
                color: #fff;
            }

            .mid-prev a:hover,.mid-next a:hover{
                color: #f8c404;
            }

            .info-tip{
                background: none;
                margin-left: 15px;
                padding: 3px 10px;
                border-radius: 50%;
                color: #fff;
                font-size: 12px;
                border: #fff 2px solid;
            }

            @media print {
                body {
                    display:none;
                }
            }
		 </style>
		<style>
		#the-canvas {
		border: 1px solid black;
		direction: ltr;
		margin: 0 auto;
		display: block;
		width: 100%;
		
		}
		
		.canv-prop{
			position: relative;
			top: 0;
			left: 0;
		}
		
		.conv-layer{
			width: 100%;
/*			background: rgba(243, 243,243, 0.1);	*/
			background: rgba(31, 31,31, 0.1);	
			position: absolute;
			top: 45px;
			left: 0;
			height: 95.5%;
		}
		
		.watermark{
			position: absolute;
			top: 50%;
			left: 35%;
			color: rgba(223, 223, 223, 0.4);
			font-size: 4em;
			text-align: center;
			font-weight: bold;	
		}
		
		
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
                                <div class="add-new"><a href="<?php echo base_url() . "Upload/documentreport"; ?>"><i class="fa fa-file"></i> &nbsp; Document Details</a></div>
                            </div>
                            <div class="info-box">
                                <div class="tit-des"><?php echo $description; ?></div>
                                <div><i class="fa fa-calendar-check icon-bg"></i> posted on:<?php echo $date; ?></div>
                            </div>
							<?php  
                              // echo $_SERVER['HTTP_HOST'];
                             if($_SERVER['HTTP_HOST']=='65.0.153.254'){
                             // echo  $_SERVER['HTTP_HOST'];
                            ?>
                            <div class="smline"></div> 
                            <div class="row rnd-pd">
                                <div class="col-md-12">
                                    <div class="pagination">
                                        <div class="wrap">
                                            <input type="hidden" id="pathid" value="<?php echo $id; ?>" />
                                            <button id="prev" style="float:left;" class="pdg-btns ">Previous</button>
                                            <button id="next" style=" float: right;" class="pdg-btns ">Next</button>
                                            &nbsp; &nbsp;
                                            <div  class="pag-count">
                                                <span>Page: <span id="page_num"></span> /
                                                    <span id="page_count"></span></span>
                                            </div>
                                        </div>
                                    </div>
							<canvas id="the-canvas"></canvas>
							<div class="watermark"><?php echo $this->session->userdata('name');?> - BBA </div>
								<div class="conv-layer"></div>
									<div class="mid-prev"><a href="#" id="prev1" ><i class="fa fa-arrow-left"></i></a></div>
                                    <div class="mid-next"><a href="#" id="next1" ><i class="fa fa-arrow-right"></i></a></div>
                                    <div style=" margin-top: 15px;">
                                        <button id="prev2" style="float:left;" class="pdg-btns ">Previous</button>
                                        <button id="next2" style=" float: right;" class="pdg-btns ">Next</button>
                                    </div>
                                </div>
                            </div>
							<?php } ?>
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