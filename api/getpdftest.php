<?php

/*
 * ===========================================================
 * Allow when specific referer finds
 * Added by Suresh on 28.06.2022 14:50
 */
$allowed_ref = array("65.0.153.254");
$response = array();
$response['msg'] = "Access Denied";
if (!isset($_SERVER['HTTP_REFERER'])) {
    echo base64_encode(json_encode($response));
    exit;
} else {
    $referer = str_replace("http://", "", $_SERVER['HTTP_REFERER']);
    $referer = str_replace("https://", "", $referer);
    $refparts = explode("/", $referer);
    if (!in_array($refparts[0], $allowed_ref)) {
        echo base64_encode(json_encode($response));
        exit;
    }
}
/*
 * ===========================================================
 */

session_start();
$dbhost = "balabharatdb.cluster-c0f8wc68hisl.ap-south-1.rds.amazonaws.com";
$dbuser = "etvbaladbuser";
$dbpwd = "bA!aBharAtD2Us5r";
$dbname = "raftlms";

$date = date('Y-m-d H:i:s');
$conn = pg_connect("host=$dbhost dbname=$dbname user=$dbuser password=$dbpwd") or die('Could not open DB Connection...') . pg_last_error();


//$url = $getdata->doc_path;


$response = array();
$response['url'] = "https://etvbalbharat-gallery.s3.ap-south-1.amazonaws.com/pdftest/ebook.pdf";
//$response['url'] = "https://etvbalbharat-gallery.s3.ap-south-1.amazonaws.com/pdftest/pdf1654064082_ElectionInformation-Candidates.pdf";
//$response['pwd'] = "R@ft#LMS";
//
//$response['url'] = "https://imagesukml.awsapps.com/workdocs/index.html#/share/document/eb1e50f4e90793c0f1059960bd699fe43fc942299899ec4d850fc7d3842add0a";

//
echo base64_encode(json_encode($response));
