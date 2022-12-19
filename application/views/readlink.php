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
    </head>
    <body>


        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <!--All Exam-->
                    <div class="col-md-12">
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
                            
                            
                            <div class="smline"></div>
                            <div class="row rnd-pd">
                                <div class="col-md-12">
                                    <div class="pagination">
                                        <div class="wrap">
                                          <input type="hidden" id="pathid" value="1" />
                                            <button id="prev" style="float:left;" class="pdg-btns ">Previous</button>
                                            <button id="next" style=" float: right;" class="pdg-btns ">Next</button>
                                            &nbsp; &nbsp;
                                            <div  class="pag-count">
                                                <span>Page: <span id="page_num"></span> /
                                                    <span id="page_count"></span></span>
                                            </div>
                                        </div>
                                    </div>

                                    <canvas id="the-canvas">
                                       
                                    </canvas>
                                    <div class="mid-prev"><a href="#" id="prev1" ><i class="fa fa-arrow-left"></i></a></div>
                                    <div class="mid-next"><a href="#" id="next1" ><i class="fa fa-arrow-right"></i></a></div>
                                    <div style=" margin-top: 15px;">
                                        <button id="prev2" style="float:left;" class="pdg-btns ">Previous</button>
                                        <button id="next2" style=" float: right;" class="pdg-btns ">Next</button>
                                    </div>
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
    </body>
</html>

<!--<script>
    ;document.addEventListener('contextmenu',event=>event.preventDefault());var pdfjsLib=window['pdfjs-dist/build/pdf'];pdfjsLib.GlobalWorkerOptions.workerSrc='https://mozilla.github.io/pdf.js/build/pdf.worker.js';var pdfDoc=null,pageNum=1,pageRendering=!1,pageNumPending=null,scale=2,canvas=document.getElementById('the-canvas'),ctx=canvas.getContext('2d');function renderPage(e){pageRendering=!0;pdfDoc.getPage(e).then(function(e){var n=e.getViewport({scale:scale});canvas.height=n.height;canvas.width=n.width;var a={canvasContext:ctx,viewport:n};var t=e.render(a);t.promise.then(function(){pageRendering=!1;if(pageNumPending!==null){renderPage(pageNumPending);pageNumPending=null}})});document.getElementById('page_num').textContent=e};function queueRenderPage(e){if(pageRendering){pageNumPending=e}
else{renderPage(e)}};function onPrevPage(){if(pageNum<=1){return};pageNum--;queueRenderPage(pageNum)};document.getElementById('prev').addEventListener('click',onPrevPage);document.getElementById('prev1').addEventListener('click',onPrevPage);document.getElementById('prev2').addEventListener('click',onPrevPage);function onNextPage(){if(pageNum>=pdfDoc.numPages){return};pageNum++;queueRenderPage(pageNum)};document.getElementById('next').addEventListener('click',onNextPage);document.getElementById('next1').addEventListener('click',onNextPage);document.getElementById('next2').addEventListener('click',onNextPage);var xmlhttp=new XMLHttpRequest();xmlhttp.onreadystatechange=function(){if(this.readyState==4&&this.status==200){var e=JSON.parse(atob(this.responseText)),n=pdfjsLib.getDocument({url:e['url'],password:e['pwd']});n.promise.then(function(e){pdfDoc=e;document.getElementById('page_count').textContent=pdfDoc.numPages;renderPage(pageNum)})}}; xmlhttp.open('GET','http://65.0.153.254/raft_lms/api/getpdftest.php',!0);xmlhttp.send();
    </script>-->