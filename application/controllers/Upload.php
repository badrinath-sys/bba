<?php

ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Upload_model');
        $this->load->helper('s3upload_helper');
        $this->load->model('Skill_model');
    }

    public function documentreport() {
        if (trim($this->session->userdata('username')) != "") {
            $res = $this->Upload_model->getdocumentdetails();
            $mainmo = "PDF";
            $submo = "Uploaded Documents";
            $header['main'] = $mainmo;
            $header['submenu'] = $submo;
            $this->load->view('header', $header);
            $data['documentresult'] = $res;
            $this->load->view('uploaded_documents', $data);
            $this->load->view('footer');
        } else {
            redirect(base_url() . 'index.php/');
        }
    }

    public function addnewdocument() {
        if (trim($this->session->userdata('username')) != "") {
            $res = $this->Upload_model->getlanguagedetails();
            $skilldetails = $this->Skill_model->getskilldetails();
            $mainmo = "PDF";
            $submo = "Add New Document";
            $header['main'] = $mainmo;
            $header['submenu'] = $submo;
            $this->load->view('header', $header);
            $data['language'] = $res;
            $data['skill'] = $skilldetails;
            $this->load->view('add_documents', $data);
            $this->load->view('footer');
        } else {
            redirect(base_url() . 'index.php/');
        }
    }

    public function adddocuments() {
        if (trim($this->session->userdata('username')) != "") {
            $data = $this->input->post();

            $tempfile = $_FILES['upload_doc']['tmp_name'];
            $newfile1 = $_FILES['upload_doc']['name'];

            $dateexist = time();
            $firstname = "pdf" . $dateexist;
            $imgname = $this->chkuploadimage($tempfile, $newfile1, $firstname); //Promo video

            $docid = $_POST['docid'];
            if ($docid != '') {
                $res = $this->Upload_model->updatedocuments($data, $imgname, $docid);
            } else {
                $res = $this->Upload_model->savedocuments($data, $imgname);
            }
            if ($res == 1) {
                $this->session->set_flashdata("user_status", "Successfully Added Documents  ");
            } else {
                $this->session->set_flashdata("user_status", "Failed To Add Documents ");
            }
            redirect(base_url() . 'index.php/Upload/documentreport');
        } else {
            redirect(base_url() . 'index.php/');
        }
    }

    public function chkuploadimage($tmpfile1, $newfile1, $firstname1) {
        $tmpfile = str_replace(' ', '', $tmpfile1);
        $newfile = str_replace(' ', '', $newfile1);
        $firstname = str_replace(' ', '', $firstname1);

        $expimgname = explode('.', $newfile);
        $FILENAME = 'bbadocuments/' . $firstname . '_' . $expimgname[0] . "." . $expimgname[1];
        $FILENAME2 = $firstname . '_' . $expimgname[0] . "." . $expimgname[1];


        $PATH = "/var/www/html/EtvBharatPrimeApps/balbharat/galleryimages/bbadocuments/";
        $upload_image = $PATH . $FILENAME2;

        if ($newfile != "") {

            // $date = new DateTime();
            $imagename = $newfile;


            if (file_exists($upload_image)) {
                $error = "image with this name already exists. Could not upload";
                print_r($error);
                print_r($imagename);
                return $FILENAME;
                exit;
            }

            if (move_uploaded_file($tmpfile, $upload_image)) {

                $dest = str_replace('/var/www/html/EtvBharatPrimeApps/balbharat/galleryimages/', '', $upload_image);
                s3upload($upload_image, $dest, 'bbadocuments', '');
            }
            return $FILENAME;
        }
    }

    public function readpdf($id) {
        if (trim($this->session->userdata('username')) != "") {
            $res = $this->Upload_model->getuploadedpath($id);
            $data['path'] = $res[0]['doc_path'];
            $data['id'] = $id;
            $data['title'] = $res[0]['doc_title'];
            $data['description'] = $res[0]['doc_description'];
            $data['date'] = date('Y-m-d', strtotime($res[0]['entry_date']));
            $res = $this->Upload_model->getlanguagedetails();
            $mainmo = "PDF";
            $submo = "Read Document";
            $header['main'] = $mainmo;
            $header['submenu'] = $submo;
            $this->load->view('header', $header);
            $this->load->view('testingpdf', $data);
            $this->load->view('footer');
        } else {
            redirect(base_url() . 'index.php/');
        }
    }

    public function addnewquestions() {
        if (trim($this->session->userdata('username')) != "") {
            $mainmo = "Question Bank";
            $submo = "Add New Question";
            $header['main'] = $mainmo;
            $header['submenu'] = $submo;
            $this->load->view('header', $header);
            $this->load->view('addnewquestions');
            $this->load->view('footer');
        } else {
            redirect(base_url() . 'index.php/');
        }
    }

    public function savequizquestions() {
        $data = $this->input->post();

        $slidersave = $this->Upload_model->savequizquestions($data);
        if ($slidersave == '1') {
            $this->session->set_flashdata("slider_status", "Successfully uploaded Quiz Data");
        } else {
            $this->session->set_flashdata("slider_status", "Failed to upload Quiz Data");
        }
        redirect(base_url() . 'index.php/Upload/quizreport');
    }

    public function quizreport() {
        if (trim($this->session->userdata('username')) != "") {
            $res = $this->Upload_model->getquestionsdata($id);

            $mainmo = "Question bank upload";
            $submo = "Questions Report";
            $header['main'] = $mainmo;
            $header['submenu'] = $submo;
            $data['result'] = $res;
            $this->load->view('header', $header);
            $this->load->view('quizreport', $data);
            $this->load->view('footer');
        } else {
            redirect(base_url() . 'index.php/');
        }
    }                   

    public function editquizdetails($id) {
        if (trim($this->session->userdata('username')) != "") {
            $res = $this->Upload_model->getiniquestionsdata($id);
            $mainmo = "Question bank upload";
            $submo = "Edit Questions";
            $header['main'] = $mainmo;
            $header['submenu'] = $submo;
            $data['result'] = $res;
            $this->load->view('header', $header);
            $this->load->view('editquiz', $data);
            $this->load->view('footer');
        } else {
            redirect(base_url() . 'index.php/');
        }
    }

    public function updatequizquestions() {
        $data = $this->input->post();
        $slidersave = $this->Upload_model->updatequizquestions($data);
        if ($slidersave == '1') {
            $this->session->set_flashdata("slider_status", "Successfully uploaded Quiz Data");
            //echo("success");
        } else {
            $this->session->set_flashdata("slider_status", "Failed to upload Quiz Data");
        }
        redirect(base_url() . 'index.php/Upload/quizreport');
    }

    public function testread() {
        if (trim($this->session->userdata('username')) != "") {
            $mainmo = "PDF";
            $submo = "Read Document";
            $header['main'] = $mainmo;
            $header['submenu'] = $submo;
            $this->load->view('header', $header);
//            $this->load->view('readlink');
            $this->load->view('bbadocuments');
            $this->load->view('footer');
        } else {
            redirect(base_url() . 'index.php/');
        }
    }

//    public function filewithpassword($id){
//         $res = $this->Upload_model->getuploadedpath($id);
//         $data['path']=  $res[0]['doc_path'];
//         
//         $response = array();
//$response['url'] = "https://etvbalbharat-gallery.s3.ap-south-1.amazonaws.com/".$res[0]['doc_path'];
////$response['url'] = "https://etvbalbharat-gallery.s3.ap-south-1.amazonaws.com/".$url;
//$response['pwd'] = $res[0]['doc_password'];
//
//echo base64_encode(json_encode($response));
//    }

    public function watermarktestpdf($id = 2) {
        if (trim($this->session->userdata('username')) != "") {
            $res = $this->Upload_model->getuploadedpath($id);
            $data['path'] = $res[0]['doc_path'];
            $data['id'] = $id;
            $data['title'] = $res[0]['doc_title'];
            $data['description'] = $res[0]['doc_description'];
            $data['date'] = date('Y-m-d', strtotime($res[0]['entry_date']));
            $res = $this->Upload_model->getlanguagedetails();
            $mainmo = "PDF";
            $submo = "Read Document";
            $header['main'] = $mainmo;
            $header['submenu'] = $submo;
            //$this->load->view('header', $header);
            $this->load->view('watermarktestpdf', $data);
            // $this->load->view('footer');
        } else {
            redirect(base_url() . 'index.php/');
        }
    }

    public function servervariables() {
        if (trim($this->session->userdata('username')) != "") {
            $mainmo = "Variables";
            $submo = "Variables";
            $header['main'] = $mainmo;
            $header['submenu'] = $submo;
            $this->load->view('header', $header);
            $this->load->view('servervariables');
            $this->load->view('footer');
        } else {
            redirect(base_url() . 'index.php/');
        }
    }

    public function completednotes() {
        if (trim($this->session->userdata('username')) != "") {
            $res = $this->Upload_model->getnotcompleteddetails();
            $mainmo = "PDF";
            $submo = "Completed Notes";
            $header['main'] = $mainmo;
            $header['submenu'] = $submo;
            $this->load->view('header', $header);
            $data['documentresult'] = $res;
            $this->load->view('completed_notes', $data);
            $this->load->view('footer');
        } else {
            redirect(base_url() . 'index.php/');
        }
    }

    public function readnote($id) {
        if (trim($this->session->userdata('username')) != "") {
            $res = $this->Upload_model->getnotecompletedinddetails($id);
            $mainmo = "PDF";
            $submo = "Completed Notes";
            $header['main'] = $mainmo;
            $header['submenu'] = $submo;
            $this->load->view('header', $header);
            $data['noteresult'] = $res;
            $this->load->view('note_details', $data);
            $this->load->view('footer');
        } else {
            redirect(base_url() . 'index.php/');
        }
    }

    public function getdocdata() {
        $res = $this->Upload_model->getnotcompleteddetails();
        $datares = '<option value="">Select</option>';
        foreach ($res as $res1) {
            $docid = $res1['doc_id'];
            $doctitle = $res1['doc_title'];
            $datares.= '<option value="' . $docid . '">' . $doctitle . '</option>';
        }
        echo $datares;
    }

    public function getinddocdata() {
        $id = $_POST['documentid'];
        $res = $this->Upload_model->getuploadedpath($id);
        echo $res[0]['doc_id'] . '~' . $res[0]['doc_language'] . '~' . $res[0]['doc_title'] . '~' . $res[0]['doc_description'] . '~' . $res[0]['doc_keywords'] . '~' . $res[0]['doc_path'];
    }

    public function updatedocstatus() {
        $docid = $_POST['docid'];
        $value = $_POST['value'];
        $values = array(
            "document_waiting_at" => $value
        );
        $this->db->where('doc_id', $docid);
        $ct = $this->db->update('bba_documents_upload', $values);
        if ($ct)
            echo '1';
        else
            echo '0';
    }

    public function completedtranslations() {
        if (trim($this->session->userdata('username')) != "") {
            $res = $this->Upload_model->gettranslationscompleteddetails();
            //exit;
            $mainmo = "PDF";
            $submo = "Completed Translations";
            $header['main'] = $mainmo;
            $header['submenu'] = $submo;
            $data['langid'] = $lanid;
            $this->load->view('header', $header);
            $data['documentresult'] = $res;
            $this->load->view('completed_translations', $data);
            $this->load->view('footer');
        } else {
            redirect(base_url() . 'index.php/');
        }
    }

    public function readtranslation($docid, $lanid) {
        if (trim($this->session->userdata('username')) != "") {
            $res = $this->Upload_model->gettransreadcompletedinddetails($docid, $lanid);
            $reslang = $this->Upload_model->getlanguagedetails();
            $mainmo = "PDF";
            $submo = "Completed Translations";
            $header['main'] = $mainmo;
            $header['submenu'] = $submo;
            $this->load->view('header', $header);
            $data['translationresult'] = $res;
            $data['lang_id'] = $lanid;
            $data['doc_id'] = $docid;
            $data['language'] = $reslang;
            $this->load->view('translation_details', $data);
            $this->load->view('footer');
        } else {
            redirect(base_url() . 'index.php/');
        }
    }

    public function upload() {

        date_default_timezone_set('Asia/Kolkata');
        ini_set('upload_max_filesize', '1024M');
        // ini_set('upload_max_filesize', '50M');
        ini_set('post_max_size', '1024M');
        ini_set('max_input_time', 600000);
        ini_set('max_execution_time', 600000);
// Make sure file is not cached (as it happens for example on iOS devices) 
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");

// Settings 
        $targetDir = '/var/www/html/EtvBharatPrimeApps/balbharat/bba_lms/uploads';
        $cleanupTargetDir = true; // Remove old files 
        $maxFileAge = 500 * 3600; // Temp file age in seconds 
        @set_time_limit(5 * 60);

// Create target dir 
        if (!file_exists($targetDir)) {
            @mkdir($targetDir);
        }

// Get a file name 
        if (isset($_REQUEST["name"])) {
            $fileName = $_REQUEST["name"];
        } elseif (!empty($_FILES)) {
            $fileName = $_FILES["upload"]["name"];
        } else {
            $fileName = uniqid("file_");
        }
//$randnum=rand(1,10000);
        $randnum = date('Y-m-d_H:i:s');
//$randnum=$_REQUEST['randno'];
        $fileName = uniqid($randnum . '_' . "file_") . str_replace(' ', '', $fileName);

        $filePath = $targetDir . DIRECTORY_SEPARATOR . $fileName;

// Chunking might be enabled 
        $chunk = isset($_REQUEST["chunk"]) ? intval($_REQUEST["chunk"]) : 0;
        $chunks = isset($_REQUEST["chunks"]) ? intval($_REQUEST["chunks"]) : 0;


// Remove old temp files     
        if ($cleanupTargetDir) {
            if (!is_dir($targetDir) || !$dir = opendir($targetDir)) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 100, "message": "Failed to open temp directory."}, "id" : "id"}');
            }

            while (($file = readdir($dir)) !== false) {
                $tmpfilePath = $targetDir . DIRECTORY_SEPARATOR . $file;

                // If temp file is current file proceed to the next 
                if ($tmpfilePath == "{$filePath}.part") {
                    continue;
                }

                // Remove temp file if it is older than the max age and is not the current file 
                if (preg_match('/\.part$/', $file) && (filemtime($tmpfilePath) < time() - $maxFileAge)) {
                    @unlink($tmpfilePath);
                }
            }
            closedir($dir);
        }


// Open temp file 
        if (!$out = @fopen("{$filePath}.part", $chunks ? "ab" : "wb")) {
            die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
        }

        if (!empty($_FILES)) {
            if ($_FILES["file"]["error"] || !is_uploaded_file($_FILES["file"]["tmp_name"])) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Failed to move uploaded file."}, "id" : "id"}');
            }

            // Read binary input stream and append it to temp file 
            if (!$in = @fopen($_FILES["file"]["tmp_name"], "rb")) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
            }
        } else {
            if (!$in = @fopen("php://input", "rb")) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
            }
        }

        while ($buff = fread($in, 4096)) {
            fwrite($out, $buff);
        }

        @fclose($out);
        @fclose($in);

// Check if file has been uploaded 
        if (!$chunks || $chunk == $chunks - 1) {
            // Strip the temp .part suffix off  
            rename("{$filePath}.part", $filePath);
        }

// Return Success JSON-RPC response 
        die('{"jsonrpc" : "2.0", "result" : {"status": 200, "message": "The file has been uploaded successfully!","filepath":"' . $fileName . '"}}');
    }

    public function video_doc($id) {
        //echo $id; 
        if (trim($this->session->userdata('username')) != "") {

            $res = $this->Upload_model->getmoredocumentdetails($id);
//print_r
            $data['id'] = $id;

            $data['documentresult'] = $res;


            $mainmo = "Documents";
            $submo = "Read Document";
            $header['main'] = $mainmo;
            $header['submenu'] = $submo;




            $this->load->view('header', $header);
            $this->load->view('moredocuments',$data);
            $this->load->view('footer');
        } else {
            redirect(base_url() . 'index.php/');
        }
    }

}
