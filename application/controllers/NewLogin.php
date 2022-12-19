<?php

ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class NewLogin extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    // public function __construct() {
    // parent::__construct();
    // $this->load->library("session");
    // }
    // public function logout()
    // {
    // session_destroy();
    // $this->load->view('login');
    // }
    // public function index()
    // {
    // $this->load->view('login');
    // }
    // public function mainpage()
    // {
    // $this->load->view('index');
    // }

    public function __construct() {
        parent::__construct();
       $this->load->library('session');
        $this->load->model('Admin_model');
     
    }

    public function logout() {
        
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function index() {
       //  echo 'jj';
   $this->load->view('index');
    }

    public function getlogindetails(){
       // echo 'hh';
        //exit;
        ini_set('display_errors', 1);
       $id = $this->input->post('name');
        $pwd = $this->input->post('password');
        $username = $id;
     
        $password = $pwd;
        

        
     $query= $this->db->query("select * from bba_users where user_name='$username' and password='$password' ");
     $count = $query->num_rows();
       
        if ($count >= 1) {
           $result = $query->result_array();
          // print_r($result);
           $name=$result[0]['name'];
           $role=$result[0]['role_id'];
          // exit;
            $this->session->set_userdata('username', $id);
            $this->session->set_userdata('name', $name);
             $this->session->set_userdata('role', $role);
            redirect(base_url() . 'NewLogin/home');
        } 
        else {
            $this->session->set_flashdata("login_status", "Invalid Admin Login Details");
            redirect(base_url() . 'index.php/');
        }
     
      $this->load->view('dashboard');
    }
       
    public function home(){
       // echo $this->session->userdata('name');
       // exit;
         $mainmo="Home";
          $submo="Dashboard";
           $header['main']=$mainmo;
           $header['submenu']=$submo;
           
          $this->load->view('header',$header);
        
        
      $this->load->view('dashboard');
       $this->load->view('footer');
   }
    
    public function getuserdetails(){
        
         $mainmo="User Management";
          $submo="Admin user";
           $header['main']=$mainmo;
           $header['submenu']=$submo;
           
          $this->load->view('header',$header);
        
        
        $res = $this->Admin_model->getuserdetails();
        $data['results']=$res;
        
        $this->load->view('user_details',$data);
         $this->load->view('footer');
    }
    
    public function addnewuserdetails(){
         $mainmo="Admin user";
          $submo="Add New User";
           $header['main']=$mainmo;
           $header['submenu']=$submo;
           
          $this->load->view('header',$header);
        
        $res = $this->Admin_model->getroledetails();
        $data['roleresult']=$res;
       
         $this->load->view('create_newuser',$data);
           $this->load->view('footer');
    }
  public function saveuser(){
         $data = $this->input->post();
         $empid=$_POST['user_id'];
           $checkempid=$this->Admin_model->checkempid($empid);
         if($checkempid==0){
         $res = $this->Admin_model->saveuserdetails($data);
         if($res==1){
             $this->session->set_flashdata("user_status", "Successfully Created Newuser"); 
         }else{
             $this->session->set_flashdata("user_status", "Failed To Create Newuser"); 
         }
          redirect(base_url() . 'index.php/NewLogin/getuserdetails');
         }else{
              $this->session->set_flashdata("user_status", "User Id Already Created"); 
              redirect(base_url() . 'index.php/NewLogin/getuserdetails');
         }
  }
  
  public function edituserdetails($id){
      $mainmo="Admin user";
          $submo="Update New User";
           $header['main']=$mainmo;
           $header['submenu']=$submo;
           
          $this->load->view('header',$header);
          
     $getuserdetails=$this->Admin_model->getuserinidetails($id);
     $res = $this->Admin_model->getroledetails();
     $data['roleresult']=$res;
     $data['getdetails']=$getuserdetails;
     // $this->load->view('header');
      $this->load->view('edit_newuser',$data);
      $this->load->view('footer');
  }
  
  public function updateuser(){
         $data = $this->input->post();
         $res = $this->Admin_model->updateuserdetails($data);
         if($res==1){
             $this->session->set_flashdata("user_status", "Successfully Updated UserData "); 
         }else{
             $this->session->set_flashdata("user_status", "Failed To Update UserData "); 
         }
         redirect(base_url() . 'index.php/NewLogin/getuserdetails');
     }
 }
