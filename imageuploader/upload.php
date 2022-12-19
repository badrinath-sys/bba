<?php
include 's3upload_helper.php';
//include '/var/www/html/EtvBharatPrimeApps/mahilabharat/admin/applications/helpers/s3upload_helper.php';
//$this->load->helper('s3upload_helper');
#echo "test1"; 
$host = $_SERVER[HTTP_HOST];
//if($host == "localhost")
//    $host = str_replace("localhost", "172.17.15.205", "$host");
//else 
//$host = str_replace("172.17.15.205", "125.16.26.68", "$host");
$headerhost = "http://$host"; 
$requesturi = pathinfo($_SERVER[REQUEST_URI]); 
$browserfolder = ltrim($requesturi["dirname"], '/');
$uploadpath = $_FILES['upload']['name']; 
$uploadtmpname = $_FILES['upload']['tmp_name'];
//$uploadtargetfile = "uploadimages/".$uploadpath; 
$uploadtargetfile = "/var/www/html/EtvBharatPrimeApps/mahilabharat/admin/imageuploader/uploadimages/".$uploadpath; 


//$CKEditor = $_GET['CKEditor']; 

// Required: Function number as indicated by CKEditor.
$funcNum = $_GET['CKEditorFuncNum']; 

//$langCode = $_GET['langCode'];

//The return url of the uploaded file
$url = '';
    
$message = '';

 $baseUrl = "$headerhost/"."$browserfolder"."/uploadimages/"; 
//$baseUrl = "/var/www/html/EtvBharatPrimeApps/mahilabharat/admin/imageuploader/uploadimages/"; 
//$baseUrl = "uploadimages/";  
//exit;

if(!empty($_FILES['upload']['name'])){    
   $name =  $_FILES['upload']['name'];
   if(move_uploaded_file($_FILES['upload']['tmp_name'], $uploadtargetfile)){   
       $dest = str_replace('/var/www/html/EtvBharatPrimeApps/mahilabharat/admin/imageuploader/', '', $uploadtargetfile);
	 
	s3upload($uploadtargetfile, $dest, 'uploadimages', '');  
                     
       $url = $baseUrl . $name;
       echo "Image Uploaded Successfully";
   } else {       
       echo "Image not uploaded";       
   }
     
}

echo "<script type='text/javascript'> window.parent.CKEDITOR.tools.callFunction($funcNum, '$url', '$message')</script>";

?>
