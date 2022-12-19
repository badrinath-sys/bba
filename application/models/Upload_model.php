<?php

defined("BASEPATH") or exit("No direct script access allowed");

class Upload_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getdocumentdetails() {
        $query5 = " select * from bba_documents_upload where is_active='t' ";
        $query = $this->db->query($query5);
        $result = $query->result_array();
        return $result;
    }
    
    public function getmoredocumentdetails($id){
         $query5 = " select * from bba_multipledocuments_upload where doc_id='$id' ";
        $query = $this->db->query($query5);
        $result = $query->result_array();
        return $result;
    }

    public function getnotcompleteddetails() {
        $query5 = " select * from bba_documents_upload where is_active='t' and doc_is_read_completed=1 ";
        $query = $this->db->query($query5);
        $result = $query->result_array();
        return $result;
    }

    public function getnotecompletedinddetails($id) {
        $query5 = " select * from bba_pdf_notes left join bba_documents_upload on doc_id=bba_document_id where bba_document_id=$id ";
        $query = $this->db->query($query5);
        $result = $query->result_array();
        return $result;
    }

    public function getlanguagedetails() {
        $query5 = " select * from bba_lms_languagedetails where status=1 ";
        $query = $this->db->query($query5);
        $result = $query->result_array();
        return $result; 
    }

    public function getagegroupe() {
        $query5 = " select * from bba_group where is_active='t' order by group_id ";
        $query = $this->db->query($query5);
        $result = $query->result_array();
        return $result;
    }

    public function savedocuments($data, $img1) {
        extract($data);

        $maxval = 0;
        $maxvallangauge = 0;
        $this->db->trans_start();
        try {
            $this->db->select_max('doc_id');
            $this->db->from('bba_documents_upload');
            $query = $this->db->get();
            $result = $query->result();
            $maxval = $result[0]->doc_id;
        } catch (Exception $ex) {
            print_r($ex);
            exit;
        }
        try {
            $this->db->select_max('multi_doc_id');
            $this->db->from('bba_multipledocuments_upload');
            $query = $this->db->get();
            $result = $query->result();
            $maxvalldoc = $result[0]->multi_doc_id;
        } catch (Exception $ex) {
            print_r($ex);
            exit;
        }
        $code = ($maxval + 1);
        $codel = ($maxvalldoc + 1);

        $user = $this->session->userdata('username');
        $values = array(
            "doc_id" => $code,
            "doc_language" => $language_id,
            "is_active" => true,
            "entry_date" => date("Y-m-d H:i:s"),
            "entry_by" => $user,
            "doc_title" => $title,
            "doc_description" => $description,
            "doc_keywords" => $keywords,
            "doc_skill_id" => $skill_id,
            "doc_lesson_id" => $lesson_id,
            // "doc_password" => $password,
            "doc_type" => 1,
            "doc_path" => $img1,
            "document_version" => '1'
        );


        $ct = $this->db->insert('bba_documents_upload', $values);
        
     

        foreach ($_POST['filepath'] as $key => $upd2) {
             $filetype = $_POST['type'][$key];
             $filepath = $_POST['filepath'][$key];
           // echo '<br>';
            $codel++;

            $values2 = array(
                "multi_doc_id" => $codel,
                "doc_id" => $code,
                "doc_type" => 1,
                "doc_path" => $filepath,
                "doc_type" => $filetype
            );
            $ct = $this->db->insert('bba_multipledocuments_upload', $values2);
            //}
         // $drpic = $_POST['filepath'];
         //  $PATH = "/var/www/html/EtvBharatPrimeApps/balbharat/galleryimages/bbadocuments/";
  $pic=$_SERVER['DOCUMENT_ROOT'].'/bba_lms/uploads/'.$filepath;
 $secpath= $_SERVER['DOCUMENT_ROOT'].'/galleryimages/bbadocuments/'.$filepath;
copy($pic,$secpath);
//
//$FILESNAME='drawing_pics/'.$drpic;
        }



       $this->db->trans_complete();

        if ($ct)
            return 1;
        else
            return 0;
    }

    public function updatedocuments($data, $img1, $docid) {
        //echo 'processing....';
        extract($data);
        $values = array(
            "doc_language" => $language_id,
            "doc_title" => $title,
            "doc_description" => $description,
            "doc_keywords" => $keywords,
            "doc_path" => $img1,
            "document_version" => '2'
        );
        $this->db->where('doc_id', $docid);
        $ct = $this->db->update('bba_documents_upload', $values);
        if ($ct)
            return 1;
        else
            return 0;
    }

    public function updatequizquestions($data) {
        extract($data);
        foreach ($_REQUEST['question'] as $keyc => $valc) {
            $user = $this->session->userdata('username');
            $question = $_POST['question'][$keyc];
            $values = array(
                "question" => $question,
            );

            $this->db->where('question_id', $questionid);
            $ct = $this->db->update('bbalms_quiz_questions', $values);

            $this->db->where('question_id', $questionid);
            $this->db->delete('bbalms_question_choices');
            $keyc++;
            try {
                $this->db->select_max('choice_id');
                $this->db->from('bbalms_question_choices');
                $query = $this->db->get();
                $result = $query->result();
                $maxvalchar = $result[0]->choice_id;
            } catch (Exception $ex) {
                print_r($ex);
                exit;
            }
            $codechar = $maxvalchar + 1;
            foreach ($_POST['answers'][$keyc] as $an => $upd2) {

                if (!empty($_POST['answers'][$keyc][$an])) {
                    $answerdesc = $_POST['answers'][$keyc][$an];

                    // $_POST['canswers'][$keyc][$an];
                    if (isset($_POST['canswers'][$keyc][$an]) && $_POST['canswers'][$keyc][$an] != '') {

                        //$correctans = $_POST['canswers'][$keyc][$an];
                        $correctans = 't';
                    } else {
                        // echo 'ki';
                        $correctans = 'f';
                    }
                    $valuesggch = array(
                        "choice_id" => $codechar,
                        "question_id" => $questionid,
                        "choice" => $answerdesc,
                        "is_right_choice" => $correctans,
                        "etrydate" => date("Y-m-d H:i:s"),
                        "entryby" => $user
                    );

//                    echo '<pre>';
//                    print_r($valuesggch);
//                    echo '</pre>';

                    $ct = $this->db->insert('bbalms_question_choices', $valuesggch);
                    $mm++;
                }
                $codechar++;
            }
        }
    }

    public function getuploadedpath($id) {
        $query5 = " select * from bba_documents_upload where doc_id='$id' ";
        $query = $this->db->query($query5);
        $result = $query->result_array();
        return $result;
    }

    public function getquestionsdata() {
        $query5 = " select * from bbalms_quiz_questions ";
        $query = $this->db->query($query5);
        $result = $query->result_array();
        return $result;
    }

    public function getiniquestionsdata($id) {
        $query5 = " select * from bbalms_quiz_questions  where question_id=$id ";
        $query = $this->db->query($query5);
        $result = $query->result_array();
        return $result;
    }

    public function quizquestionanswerdata($qid) {
        $query5 = " select * from bbalms_question_choices  where question_id=$qid ";
        $query = $this->db->query($query5);
        $result = $query->result_array();
        return $result;
    }

    public function savequizquestions($data) {
        extract($data);
        $maxval = 0;
        try {
            $this->db->select_max('question_id');
            $this->db->from('bbalms_quiz_questions');
            $query = $this->db->get();
            $result = $query->result();
            $maxval = $result[0]->question_id;
        } catch (Exception $ex) {
            print_r($ex);
            exit;
        }
        $code = ($maxval + 1);
        //$maxvallangaugechara = 0;
        //$mm=1;
        foreach ($_REQUEST['question'] as $keyc => $valc) {
            //echo 'kkkk';
            try {
                $this->db->select_max('choice_id');
                $this->db->from('bbalms_question_choices');
                $query = $this->db->get();
                $result = $query->result();
                $maxvalchar = $result[0]->choice_id;
            } catch (Exception $ex) {
                print_r($ex);
                exit;
            }
            $codechar = $maxvalchar + 1;

            $user = $this->session->userdata('username');
            $question = $_POST['question'][$keyc];
            $lang = 1;
            $values = array(
                "question_id" => $code,
                "language_id" => $lang,
                "question" => $question,
                "entrydate" => date("Y-m-d H:i:s"),
                "entryby" => $user
            );

            $ct = $this->db->insert('bbalms_quiz_questions', $values);

            $keyc++;

            foreach ($_POST['answers'][$keyc] as $an => $upd2) {

                if (!empty($_POST['answers'][$keyc][$an])) {
                    $answerdesc = $_POST['answers'][$keyc][$an];

                    //  echo $_POST['canswers'][$keyc][$an];
                    if (isset($_POST['canswers'][$keyc][$an]) && $_POST['canswers'][$keyc][$an] != '') {
                        $correctans = $_POST['canswers'][$keyc][$an];
                    } else {
                        $correctans = 'f';
                    }


                    $valuesggch = array(
                        "choice_id" => $codechar,
                        "question_id" => $code,
                        "choice " => $answerdesc,
                        "is_right_choice" => $correctans,
                        "entrydate" => date("Y-m-d H:i:s"),
                        "entryby" => $user
                    );


                    $ct = $this->db->insert('bbalms_question_choices', $valuesggch);
                    $mm++;
                }
                $codechar++;
            }
            $code++;
        }

        return 1;
        //characteriinfo  
    }

    public function gettranslationscompleteddetails() {
        $query5 = " select * from bba_documents_upload where is_active='t' and is_translation_is_completed=1 ";
//         $query5 = " select * from bba_pdf_translation left join bba_documents_upload on doc_id=bba_document_id where bba_language_id=$langid and is_translation_is_completed=1 ";
        // $query5 = " select * from bba_pdf_translation left join bba_documents_upload on doc_id=bba_document_id where bba_language_id=$langid and is_translation_is_completed=1 ";
        $query = $this->db->query($query5);
        $result = $query->result_array();
        return $result;
    }

    public function gettransreadcompletedinddetails($docid, $langid) {
        $query5 = " select * from bba_pdf_translation left join bba_documents_upload on doc_id=bba_document_id where bba_language_id=$langid and is_translation_is_completed=1 and doc_id=$docid ";
        $query = $this->db->query($query5);
        $result = $query->result_array();
        return $result;
    }

}
