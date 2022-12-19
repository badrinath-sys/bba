<?php

ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Admin_model');
    }

    public function roles_assign() {
        $res = $this->Admin_model->getroledetails();
        $mainmenu = $this->Admin_model->getmenudetails();
        $mainmo = "Roles";
        $submo = "Creation of roles";
        $header['main'] = $mainmo;
        $header['submenu'] = $submo;

        $this->load->view('header', $header);

        $data['roleresult'] = $res;
        $data['menuresult'] = $mainmenu;



        $this->load->view('roles_assign', $data);
        $this->load->view('footer');
    }

    public function saveassignrole() {
        $data = $this->input->post();
        $res = $this->Admin_model->saveassignrole($data);
        if ($res == 1) {
            $this->session->set_flashdata("user_status", "Successfully Asigned Roles  ");
        } else {
            $this->session->set_flashdata("user_status", "Failed To Asigned Roles ");
        }
        redirect(base_url() . 'index.php/Login/roles_assign');
    }

    public function roles_creation() {
        $mainmo = "Roles";
        $submo = "Creation of roles";
        $header['main'] = $mainmo;
        $header['submenu'] = $submo;

        $this->load->view('header', $header);


        $res = $this->Admin_model->getroledetails();
        $data['results'] = $res;

        $this->load->view('roles_creation', $data);
        $this->load->view('footer');
    }

    public function addnewrole() {
        $mainmo = "Roles";
        $submo = "Add New role";
        $header['main'] = $mainmo;
        $header['submenu'] = $submo;

        $this->load->view('header', $header);
        $this->load->view('create_newrole', $data);
        $this->load->view('footer');
    }

    public function saverole() {
        $data = $this->input->post();
        $res = $this->Admin_model->saveroledata($data);
        if ($res == 1) {
            $this->session->set_flashdata("user_status", "Successfully Created Newrole");
        } else {
            $this->session->set_flashdata("user_status", "Failed To Create Newrole");
        }
        redirect(base_url() . 'index.php/Roles/roles_creation');
    }

    public function editrole($id) {
        $mainmo = "Roles";
        $submo = "Update New Role";
        $header['main'] = $mainmo;
        $header['submenu'] = $submo;
        $this->load->view('header', $header);
        $getroledetails = $this->Admin_model->getroleinddetails($id);
        $data['getroledetails'] = $getroledetails;
        // $this->load->view('header');
        $this->load->view('edit_role', $data);
        $this->load->view('footer');
    }
    
    public function updaterole(){
        $data = $this->input->post();
         $res = $this->Admin_model->updateroledetails($data);
         if ($res == 1) {
            $this->session->set_flashdata("user_status", "Successfully Created Newrole");
        } else {
            $this->session->set_flashdata("user_status", "Failed To Create Newrole");
        }
        redirect(base_url() . 'index.php/Roles/roles_creation');
    }

}
