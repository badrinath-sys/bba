<?php

ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Lesson extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Upload_model');
        $this->load->helper('s3upload_helper');
        $this->load->model('Lesson_model');
       
        
    }

   
 public function lessonreport(){
     if (trim($this->session->userdata('username')) != "") {
            //$res = $this->Upload_model->getlanguagedetails();
           $lessondetails=$this->Lesson_model->getlessondetails();
            $mainmo = "Lesson";
            $submo = "Lesson Report";
            $header['main'] = $mainmo;
            $header['submenu'] = $submo;
            $this->load->view('header', $header);
           $data['result'] = $lessondetails;
            $this->load->view('lesson_report', $data);
            $this->load->view('footer');
        } else {
            redirect(base_url() . 'index.php/');
        }
 }
 
 public function add_lesson(){
    if (trim($this->session->userdata('username')) != "") {
          $skilldetails=$this->Lesson_model->getskilldetails();
           $res = $this->Upload_model->getlanguagedetails();
            $mainmo = "Lesson";
            $submo = "Add New Lesson ";
            $header['main'] = $mainmo;
            $header['submenu'] = $submo;
            $this->load->view('header', $header);
            $data['skill'] = $skilldetails;
              $data['language'] = $res;
            $this->load->view('add_lesson', $data);
            $this->load->view('footer');
        } else {
            redirect(base_url() . 'index.php/');
        }  
 }
 
 public function savelesson(){
       if (trim($this->session->userdata('username')) != "") {
            $data = $this->input->post();

        $slidersave = $this->Lesson_model->setsavelesson($data);
        if ($slidersave == '1') {
            $this->session->set_flashdata("slider_status", "Successfully uploaded Lesson Data");
          
        } else {
            $this->session->set_flashdata("slider_status", "Failed to upload Lesson Data");
        }
        redirect(base_url() . 'Lesson/lessonreport');
       }
        else {
            redirect(base_url() . 'index.php/');
        }  
 }
 
 public function editlessondetails($id){
      if (trim($this->session->userdata('username')) != "") {
            $skilldetails=$this->Lesson_model->getskilldetails();
          $res = $this->Upload_model->getlanguagedetails();
          $lessondata = $this->Lesson_model->getlessoninidetails($id);
            $mainmo = "Lesson";
            $submo = "Update New Lesson ";
            $header['main'] = $mainmo;
            $header['submenu'] = $submo;
            $this->load->view('header', $header);
             $data['skill'] = $skilldetails;
            $data['language'] = $res;
            $data['result'] = $lessondata;
             $data['lessonid'] = $id;
            $this->load->view('update_lesson', $data);
            $this->load->view('footer');
      }
      else {
            redirect(base_url() . 'index.php/');
        }  
 }
     public function updatelesson() {

        $data = $this->input->post();
        $slidersave = $this->Lesson_model->setupdatelessondata($data);
        if ($slidersave == '1') {
            $this->session->set_flashdata("slider_status", "Successfully uploaded Lesson Data");
            //echo("success");
        } else {
            $this->session->set_flashdata("slider_status", "Failed to upload Lesson Data");
        }
      redirect(base_url() . 'Lesson/lessonreport');
    }

}
