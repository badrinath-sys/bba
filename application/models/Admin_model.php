<?php

defined("BASEPATH") or exit("No direct script access allowed");

class Admin_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getuserdetails() {
         $query5 = " select * from bba_users a left join bba_roles b on a.role_id=b.role_id where role!='A' ";
         $query = $this->db->query($query5);
         $result = $query->result_array();
         return $result;
    }
    public function getroledetails(){
         $query5 = " select * from bba_roles where role_id!=1 ";
         $query = $this->db->query($query5);
         $result = $query->result_array();
         return $result;
    }
    
    public function checkempid($empid){
        $query= $this->db->query("select * from bba_users where user_name='$empid'  ");
        $count = $query->num_rows();
        
        return $count;
    }
    
    public function saveuserdetails($data){
        extract($data);
        $name=$uname;
        $empid=$user_id;
        $password=$password;
        $role=$role_id;
        $exprole=explode('~',$role);
        $roleid=$exprole[0];
        $roleshortname=$exprole[1];
         $maxval = 0;
         try {
            $this->db->select_max('user_id');
            $this->db->from('bba_users');
            $query = $this->db->get();
            $result = $query->result();
            $maxval = $result[0]->user_id;
        } catch (Exception $ex) {
            print_r($ex);
            exit;
        }
        
         $userid = ($maxval + 1);
         $user=1;
         $values = array(
            "user_id" => $userid,
            "name" => $name,
            "user_name" => $empid,
            "password" => $password,
            "is_active" => true,
            "entry_date" => date("Y-m-d H:i:s"),
            "entry_by" => $user,
            "role" => $roleshortname,
            "role_id" => $roleid,
            "language" => 1
        );
        $ct = $this->db->insert('bba_users', $values);
        if($ct){
            return 1;
        }else{
             return 0;
        }
    }    
    public function getuserinidetails($empid){
     $query= $this->db->query(" select * from bba_users where user_id=$empid  ");
     //echo $this->db->last_query();
     $result = $query->result_array();
     return $result;
    }
    
    public function updateuserdetails($data){
        
         extract($data);
        $role=$role_id;
        $exprole=explode('~',$role);
        $roleid=$exprole[0];
        $roleshortname=$exprole[1];
       $userid=$userid;
        $values = array(
            "name" => $uname,
            "role" => $roleshortname,
            "role_id" => $roleid
        );

        $this->db->where('user_id', $userid);
        $ct = $this->db->update('bba_users', $values);
        
       //echo $this->db->last_query();
         if($ct){
            return 1;
        }else{
             return 0;
        }
    }
   public function getmenudetails(){
        $query= $this->db->query(" select * from bba_main_menu where bba_main_is_active='t'  ");
        $result = $query->result_array();
        return $result;
   }
   
   public function getsubmenudetails($menuid){
       $query= $this->db->query(" select * from bba_sub_menu where bba_submenu_main_menuid=$menuid  ");
        $result = $query->result_array();
        return $result;
   }
   
   public function saveassignrole($data){
        extract($data);
          $menuid=implode(',',$maincheck);
          $submenu=implode(',',$subcheck);
          $roleid=$role_id;
          
           $values = array(
            "eligible_forms" => $menuid,
            "eligible_subforms" => $submenu
          );

        $this->db->where('role_id', $roleid);
        $ct = $this->db->update('bba_users', $values);
        
        //echo $this->db->last_query();
         if($ct){
            return 1;
        }else{
             return 0;
        }
    }
    
    public function saveroledata($data){
        extract($data);
        
        $rolename=$rolename;
       $shortname= strtoupper(substr($rolename,0,1));
       
       
         $maxval = 0;
         try {
            $this->db->select_max('role_id');
            $this->db->from('bba_roles');
            $query = $this->db->get();
            $result = $query->result();
            $maxval = $result[0]->role_id;
        } catch (Exception $ex) {
            print_r($ex);
            exit;
        }
        
         $roleid = ($maxval + 1);
         $user=1;
         $values = array(
            "role_id" => $roleid,
            "role_name" => $rolename,
            "role_short_name" => $shortname
         );
        $ct = $this->db->insert('bba_roles', $values);
        if($ct){
            return 1;
        }else{
             return 0;
        }
        
    }
    
    public function getroleinddetails($id){
        $query= $this->db->query(" select * from bba_roles where role_id=$id  ");
     //echo $this->db->last_query();
     $result = $query->result_array();
     return $result;
    }

    
    
    public function updateroledetails($data){
         extract($data);
        
        $rolename=$rolename;
       $shortname= strtoupper(substr($rolename,0,1));
       
       $values = array(
            "role_name" => $rolename
            //"role_short_name" => $shortname
           
        );

        $this->db->where('role_id', $roleid);
        $ct = $this->db->update('bba_roles', $values);
        
       //echo $this->db->last_query();
         if($ct){
            return 1;
        }else{
             return 0;
        }
    }
  

}
