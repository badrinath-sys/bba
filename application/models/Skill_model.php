<?php

defined("BASEPATH") or exit("No direct script access allowed");

class Skill_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function setsaveskill($data) {
        extract($data);
        $maxval = 0;
        $maxvallangauge = 0;
        $this->db->trans_start();
        try {
            $this->db->select_max('bba_skill_id');
            $this->db->from('bba_skill');
            $query = $this->db->get();
            $result = $query->result();
            $maxval = $result[0]->bba_skill_id;
        } catch (Exception $ex) {
            print_r($ex);
            exit;
        }

        try {
            $this->db->select_max('bba_skill_lang_uni_id');
            $this->db->from('bba_skill_language_details');
            $query = $this->db->get();
            $result = $query->result();
            $maxvallangauge = $result[0]->bba_skill_lang_uni_id;
        } catch (Exception $ex) {
            print_r($ex);
            exit;
        }

        $code = ($maxval + 1);
        $codel = ($maxvallangauge + 1);
        $user = $this->session->userdata('username');
        $values = array(
            "bba_skill_id" => $code,
            "bba_language_id" => 1,
            "bba_group_id" => $groupe_id,
            "bba_skill_name" => $skill_name,
            "bba_skill_validfrom_date" => $valid_from,
            "bba_skill_validto_date" => $valid_to,
            "bba_total_lessons" => $total_lessons,
            "bba_skill_isactive" => $is_active,
            "bba_skill_entry_date" => date("Y-m-d H:i:s"),
            "bba_skill_entry_by" => $user,
            "bba_skill_order_by_id" => 1,
            "bba_skill_description" => $skill_description
        );
        $ct = $this->db->insert('bba_skill', $values);

        $valuesgg = array(
            "bba_skill_lang_uni_id" => $codel,
            "bba_skill_language_id" => 1,
            "bba_skill_id" => $code,
            "bba_skill_language_name" => $skill_name,
            "bba_skill_language_description" => $skill_description
        );
        $ct = $this->db->insert('bba_skill_language_details', $valuesgg);

        foreach ($_POST['langauge_id'] as $upd2) {
            $codel++;
            if (!empty($_POST['skilllangauge_title'][$upd2])) {
                $title = $_POST['skilllangauge_title'][$upd2];
                $description = $_POST['skilllangauge_desc'][$upd2];
                $values = array(
                    "bba_skill_lang_uni_id" => $codel,
                    "bba_skill_language_id" => $upd2,
                    "bba_skill_id" => $code,
                    "bba_skill_language_name" => $title,
                    "bba_skill_language_description" => $description
                );
                $ct = $this->db->insert('bba_skill_language_details', $values);
            }
        }
        $this->db->trans_complete();
        if ($ct)
            return 1;
        else
            return 0;
    }

    public function setupdateskilldata($data) {
        extract($data);
        $maxvallangauge = 0;
        $this->db->trans_start();
        try {
            $this->db->select_max('bba_skill_lang_uni_id');
            $this->db->from('bba_skill_language_details');
            $query = $this->db->get();
            $result = $query->result();
            $maxvallangauge = $result[0]->bba_skill_lang_uni_id;
        } catch (Exception $ex) {
            print_r($ex);
            exit;
        }
        $codel = ($maxvallangauge + 1);
        $user = $this->session->userdata('username');
        $values = array(
            "bba_skill_name" => $skill_name,
            "bba_group_id" => $groupe_id,
            "bba_skill_description" => $skill_description,
            "bba_skill_validfrom_date" => $valid_from,
            "bba_skill_validto_date" => $valid_to,
            "bba_total_lessons" => $total_lessons,
            "bba_skill_isactive" => $is_active
        );

// print_r($values); exit;


        $this->db->where('bba_skill_id', $skillid);
        $ct = $this->db->update('bba_skill', $values);

        $this->db->where('bba_skill_id', $skillid);
        $this->db->delete('bba_skill_language_details');

        $valuesgg = array(
            "bba_skill_lang_uni_id" => $codel,
            "bba_skill_language_id" => 1,
            "bba_skill_id" => $skillid,
            "bba_skill_language_name" => $skill_name,
            "bba_skill_language_description" => $skill_description
        );

        $ct = $this->db->insert('bba_skill_language_details', $valuesgg);

        foreach ($_POST['langauge_id'] as $upd2) {
            //echo $upd2;
            $codel++;
            if (!empty($_POST['skilllangauge_title'][$upd2])) {
                $title = $_POST['skilllangauge_title'][$upd2];
                $description = $_POST['skilllangauge_desc'][$upd2];
                $values = array(
                    "bba_skill_lang_uni_id" => $codel,
                    "bba_skill_language_id" => $upd2,
                    "bba_skill_id" => $skillid,
                    "bba_skill_language_name" => $title,
                    "bba_skill_language_description" => $description
                );
                $ct = $this->db->insert('bba_skill_language_details', $values);
            }
        }


        $this->db->trans_complete();

        if ($ct)
            return 1;
        else
            return 0;
    }

    public function getskilldetails() {
        $query5 = " select b.group_age,a.* from bba_skill  a
left join bba_group  as b on b.group_id=a.bba_group_id
where a.bba_skill_isactive='t' ";
        $query = $this->db->query($query5);
        $result = $query->result_array();
        return $result;
    }

    public function gettotallessons($cid) {
        $query5 = " select * from bba_skill where bba_skill_id=$cid ";
        $query = $this->db->query($query5);
        $result = $query->result();
        return $result[0]->bba_total_lessons;
    }

    public function getskillinidetails($id) {
//         $this->db->select('*');
//        $this->db->from('bba_skill as a ');
//        $this->db->join('bba_skill_language_details', 'bba_skill_language_details.bba_skill_id  = bba_skill.bba_skill_id and bba_skill_language_id = 1');
//        $this->db->where(array('bba_skill_id' => $id));
//
//        $result = $this->db->get()->result();

        $query1 = " select * from bba_skill as a left join bba_skill_language_details as b on a.bba_skill_id=b.bba_skill_id and b.bba_skill_language_id = 1 where a.bba_skill_id=$id ";
        $query = $this->db->query($query1);
        $result = $query->result();
        return $result;
        // echo $this->db->last_query();
        // exit;
        // return $result;
    }

    public function getskillnamelanguagewise($skillid, $lid) {
        $query1 = " select * from bba_skill_language_details  where bba_skill_id=$skillid and bba_skill_language_id=$lid ";
        $query = $this->db->query($query1);
        $result = $query->result();
        return $result;
    }

}
