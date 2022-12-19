<?php

defined("BASEPATH") or exit("No direct script access allowed");

class Lesson_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

   public function setsavelesson($data){
        extract($data);
        $maxval = 0;
        $maxvallangauge = 0;
        $this->db->trans_start();
        try {
            $this->db->select_max('bba_lesson_id');
            $this->db->from('bba_lesson');
            $query = $this->db->get();
            $result = $query->result();
            $maxval = $result[0]->bba_lesson_id;
        } catch (Exception $ex) {
            print_r($ex);
            exit;
        }

        try {
            $this->db->select_max('bba_lesson_lang_uni_id');
            $this->db->from('bba_lesson_language_details');
            $query = $this->db->get();
            $result = $query->result();
            $maxvallangauge = $result[0]->bba_lesson_lang_uni_id;
        } catch (Exception $ex) {
            print_r($ex);
            exit;
        }

        $code = ($maxval + 1);
        $codel = ($maxvallangauge + 1);
        $user = $this->session->userdata('username');
        $values = array(
            "bba_lesson_id" => $code,
            "bba_language_id"=>1,
            "bba_skill_id" => $skill_id,
            "bba_lesson_name" => $lesson_name,
            "bba_lesson_validfrom_date" =>$valid_from,
            "bba_lesson_validto_date" =>$valid_to,
            "bba_total_lessons" =>$total_lessons,
            "bba_lesson_isactive" => $is_active,
            "bba_lesson_entry_date" => date("Y-m-d H:i:s"),
            "bba_lesson_entry_by" => $user,
            "bba_lesson_order_by_id" => 1,
            "bba_lesson_description" => $lesson_description
        );
        $ct = $this->db->insert('bba_lesson', $values);
        
          $valuesgg = array(
            "bba_lesson_lang_uni_id" => $codel,
            "bba_lesson_language_id" => 1,
            "bba_lesson_id" => $code,
            "bba_lesson_language_name" => $lesson_name,
            "bba_lesson_language_description" => $lesson_description
        );
        $ct = $this->db->insert('bba_lesson_language_details', $valuesgg);

        foreach ($_POST['langauge_id'] as $upd2) {
             $codel++;
            if (!empty($_POST['lessonlangauge_title'][$upd2])) {
                $title = $_POST['lessonlangauge_title'][$upd2];
                $description = $_POST['lessonlangauge_desc'][$upd2];
                $values = array(
                    "bba_lesson_lang_uni_id" => $codel,
                    "bba_lesson_language_id" => $upd2,
                    "bba_lesson_id" => $code,
                    "bba_lesson_language_name" => $title,
                    "bba_lesson_language_description" => $description
                );
                $ct = $this->db->insert('bba_lesson_language_details', $values);
            }
        }
        $this->db->trans_complete();
        if ($ct)
            return 1;
        else
            return 0;
   }
   
   public function setupdatelessondata($data){
       extract($data);
       $maxvallangauge = 0;
       $this->db->trans_start();
        try {
            $this->db->select_max('bba_lesson_lang_uni_id');
            $this->db->from('bba_lesson_language_details');
            $query = $this->db->get();
            $result = $query->result();
            $maxvallangauge = $result[0]->bba_lesson_lang_uni_id;
        } catch (Exception $ex) {
            print_r($ex);
            exit;
        }
        $codel = ($maxvallangauge + 1);
        $user = $this->session->userdata('username');
        $values = array(
            "bba_lesson_name" => $lesson_name,
            "bba_skill_id" => $skill_id,
            "bba_lesson_description" => $lesson_description,
            "bba_lesson_validfrom_date" =>$valid_from,
            "bba_lesson_validto_date" =>$valid_to,
            "bba_total_lessons" =>$total_lessons,
            "bba_lesson_isactive" => $is_active
            
        );

// print_r($values); exit;


        $this->db->where('bba_lesson_id', $lessonid);
        $ct = $this->db->update('bba_lesson', $values);




        $this->db->where('bba_lesson_id', $lessonid);
        $this->db->delete('bba_lesson_language_details');



        $valuesgg = array(
            "bba_lesson_lang_uni_id" => $codel,
            "bba_lesson_language_id" => 1,
            "bba_lesson_id" => $lessonid,
            "bba_lesson_language_name" => $lesson_name,
            "bba_lesson_language_description" => $lesson_description
        );


        $ct = $this->db->insert('bba_lesson_language_details', $valuesgg);



        foreach ($_POST['langauge_id'] as $upd2) {
            //echo $upd2;
            $codel++;

            if (!empty($_POST['lessonlangauge_title'][$upd2])) {
                $title = $_POST['lessonlangauge_title'][$upd2];
                $description = $_POST['lessonlangauge_desc'][$upd2];
                $values = array(
                    "bba_lesson_lang_uni_id" => $codel,
                    "bba_lesson_language_id" => $upd2,
                    "bba_lesson_id" => $lessonid,
                    "bba_lesson_language_name" => $title,
                    "bba_lesson_language_description" => $description
                );


                $ct = $this->db->insert('bba_lesson_language_details', $values);
            }
        }


        $this->db->trans_complete();

        if ($ct)
            return 1;
        else
            return 0;
   }
   
   public function getskilldetails(){
       $query5 = " select * from bba_skill where bba_skill_isactive='t' ";
        $query = $this->db->query($query5);
        $result = $query->result_array();
        return $result;
   }
    public function getlessondetails(){
       $query5 = " select * from bba_lesson where bba_lesson_isactive='t' ";
        $query = $this->db->query($query5);
        $result = $query->result_array();
        return $result;
   }
   
   public function getlessoninidetails($id){
//         $this->db->select('*');
//        $this->db->from('bba_lesson as a ');
//        $this->db->join('bba_lesson_language_details', 'bba_lesson_language_details.bba_lesson_id  = bba_lesson.bba_lesson_id and bba_lesson_language_id = 1');
//        $this->db->where(array('bba_lesson_id' => $id));
//
//        $result = $this->db->get()->result();
        
        $query1=" select * from bba_lesson as a left join bba_lesson_language_details as b on a.bba_lesson_id=b.bba_lesson_id and b.bba_lesson_language_id = 1 where a.bba_lesson_id=$id ";
         $query = $this->db->query($query1);
        $result = $query->result();
        return $result;
        
        // echo $this->db->last_query();
        // exit;
       // return $result;
       
   }
   
   public function getlessonnamelanguagewise($lessonid,$lid){
         $query1=" select * from bba_lesson_language_details  where bba_lesson_id=$lessonid and bba_lesson_language_id=$lid ";
         $query = $this->db->query($query1);
        $result = $query->result();
        return $result;
       
   }
}
?>
























  

