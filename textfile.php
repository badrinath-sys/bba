
<?php
//$pdfurl = "https://etvbalbharat-gallery.s3.ap-south-1.amazonaws.com/pdftest/ebook.pdf";
//$pdf_content = file_get_contents($pdfurl);
//header("Content-Type: application/pdf");
//echo $pdf_content;

$pdfurl = "http://65.0.153.254/pdf/pdftest.php";
$pdf_content = file_get_contents($pdfurl);
//header("Content-Type: application/pdf");
echo $pdf_content;

//exit
?>

<!--<a href="pdfdata.php" target="_blank">GET PDF</a>-->

<!--<embed src="Pellipandiri.pdf#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="1000" height="500">
<embed
    src={PDF + "#toolbar=0"}
    type="application/pdf"
    height={800}
    width={500}
  />-->
<!--<body oncontextmenu="return false;">
<embed src="ebook.pdf#toolbar=0" type="application/pdf" width="100%" height="100%"  oncontextmenu="return false" />
</body>-->

<!--<script type="text/javascript">-->

<!--//disableRightclick();
//var message = "Right click not allowed !!";
//function disableRightclick(evt){
//    alert('k');
//    if(evt.button == 2){
//        alert(message);
//        return false;
//    }
//}
//document.oncontextmenu = function() {return false;};
//$(body).attr('disabled','disabled');-->
<!--</script>-->



