<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$config['mongo_db']['newdb'] = '172.17.15.206';
$config['mongo_db']['newdb']['port'] = '27017';
 $config['mongo_db']['newdb']['username'] = 'root';
  $config['mongo_db']['newdb']['password'] = 'root123';
   $config['mongo_db']['newdb']['database'] = 'testdb';
    $config['mongo_db']['newdb']['db_debug'] = TRUE;
     $config['mongo_db']['newdb']['write_concerns'] = (int)1;
      $config['mongo_db']['newdb']['journal'] = TRUE;
       $config['mongo_db']['newdb']['read_preference'] = NULL;
        $config['mongo_db']['newdb']['read_preference_tags'] = NULL;