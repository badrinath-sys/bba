<?php

ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Skill extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Upload_model');
        $this->load->helper('s3upload_helper');
        $this->load->model('Skill_model');
    }

   
 public function skillreport(){
     if (trim($this->session->userdata('username')) != "") {
            //$res = $this->Upload_model->getlanguagedetails();
            $skilldetails=$this->Skill_model->getskilldetails();
            $mainmo = "Skill";
            $submo = "Skill Report";
            $header['main'] = $mainmo;
            $header['submenu'] = $submo;
            $this->load->view('header', $header);
            $data['result'] = $skilldetails;
            $this->load->view('skill_report', $data);
            $this->load->view('footer');
        } else {
            redirect(base_url() . 'index.php/');
        }
        
 }
 
 public function add_skill(){
    if (trim($this->session->userdata('username')) != "") {
            $agegroup = $this->Upload_model->getagegroupe();
            $res = $this->Upload_model->getlanguagedetails();
            $mainmo = "Skill";
            $submo = "Add New Skill ";
            $header['main'] = $mainmo;
            $header['submenu'] = $submo;
            $this->load->view('header', $header);
            $data['language'] = $res;
            $data['groupe'] = $agegroup;
            $this->load->view('add_skill', $data);
            $this->load->view('footer');
        } else {
            redirect(base_url() . 'index.php/');
        }  
 }
 
 public function saveskill(){
       if (trim($this->session->userdata('username')) != "") {
            $data = $this->input->post();

        $slidersave = $this->Skill_model->setsaveskill($data);
        if ($slidersave == '1') {
            $this->session->set_flashdata("slider_status", "Successfully uploaded Skill Data");
          
        } else {
            $this->session->set_flashdata("slider_status", "Failed to upload Skill Data");
        }
        redirect(base_url() . 'Skill/skillreport');
       }
        else {
            redirect(base_url() . 'index.php/');
        }  
 }
 
 public function editskilldetails($id){
      if (trim($this->session->userdata('username')) != "") {
           $agegroup = $this->Upload_model->getagegroupe();
          $res = $this->Upload_model->getlanguagedetails();
          $skilldata = $this->Skill_model->getskillinidetails($id);
            $mainmo = "Skill";
            $submo = "Update New Skill ";
            $header['main'] = $mainmo;
            $header['submenu'] = $submo;
            $this->load->view('header', $header);
            $data['language'] = $res;
            $data['result'] = $skilldata;
             $data['skillid'] = $id;
             $data['groupe'] = $agegroup;
            $this->load->view('update_skill', $data);
            $this->load->view('footer');
      }
      else {
            redirect(base_url() . 'index.php/');
        }   
 }
     public function updateskill() { 
        $data = $this->input->post();
        $slidersave = $this->Skill_model->setupdateskilldata($data);
        if ($slidersave == '1') {
            $this->session->set_flashdata("slider_status", "Successfully uploaded Skill Data");
            //echo("success");
        } else {
            $this->session->set_flashdata("slider_status", "Failed to upload Skill Data");
        }
      redirect(base_url() . 'Skill/skillreport');
    }
    
    public function getlessons(){
        $skillid= $_POST['skillid'];
         echo $getlessons = $this->Skill_model->gettotallessons($skillid);
    }
    
    public function getskilldata(){ 
         $skillid= $_POST['skillid'];
         $query5 = " select * from bba_lesson where bba_skill_id=$skillid ";
        $query = $this->db->query($query5);
        $result = $query->result_array();
        $data="<option value=''>Select</option>";
        foreach($result as $result1){
            $lessonname=$result1['bba_lesson_name'];
            $lessonid=$result1['bba_lesson_id'];
         $data.="<option value='$lessonid'>$lessonname</option>";   
        }
       echo $data;
       // return $result[0]->bba_total_lessons;
    }

}
