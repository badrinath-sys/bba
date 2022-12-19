<?php

require_once 'aws/aws-autoloader.php';


use Aws\DynamoDb\Exception\DynamoDbException;
use Aws\DynamoDb\Marshaler;
function getAll() {
$sdk = new Aws\Sdk([
    'region' => 'ap-south-1',
    'version' => 'latest',
    'credentials' => [
        'key' => 'AKIASAJGPVRPNHIIJXWH',
        'secret' => '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'
    ]
        ]);

$dynamodb = $sdk->createDynamoDb();
$marshaler = new Marshaler();

//exit;

$tableName = "balbharath-mediainfo";
#$tableName = "ee_user_readcount_" . date('Ymd');

$params = [
    'TableName' => $tableName
];

try {
    $result = $dynamodb->scan($params);
//   echo "<pre>";
//    print_r($result['Items']);
//     echo "</pre>";
   $items = $result['Items'];
    $sort = array();
    echo '<table border="1"><thead><th>S.No</th><th>File Name</th></thead>';
     $sno = 1;
    foreach ($items as $k => $v) {
//        echo "<pre>";
//    print_r($v['technicalMetadata']['S']);
//    echo "</pre>";
       // $sort['news_url'][$k] = $v['news_url'];
        //echo $v['keyName'];
        //$sort['count_newsid'][$k] = $v['keyName']['S'];
       // $sort['count_readcount'][$k] = $v['count_readcount'];
         echo '<tr>';
       echo '<td>' . $sno . '</td><td>' . $v['keyName']['S']. '</td>';
       echo '</tr>';
         $sno++;
    }
      echo '</table>';
      
       echo '<table border="1"><thead><th>S.No</th><th>File Name</th></thead>';
     $sno = 1;
    foreach ($items as $k => $v) {
//        echo "<pre>";
//    print_r($v['keyName']['S']);
//    echo "</pre>";
       // $sort['news_url'][$k] = $v['news_url'];
        //echo $v['keyName'];
        //$sort['count_newsid'][$k] = $v['keyName']['S'];
       // $sort['count_readcount'][$k] = $v['count_readcount'];
         echo '<tr>';
       echo '<td>' . $sno . '</td><td>' . $v['technicalMetadata']['S']. '</td>';
       echo '</tr>';
         $sno++;
    }
      echo '</table>';
      
         echo "<pre>";
    print_r($result['Items']);
     echo "</pre>";

     
} catch (DynamoDbException $e) {
    echo "Unable to get item:\n";
    echo $e->getMessage() . "\n";
}
//echo 'kkkk';

//exit;

//$serverhostname = "";
//if (isset($_SERVER['HOSTNAME'])) {
//    $serverhostname = $_SERVER['HOSTNAME'];
//}
//if ($serverhostname != "ip-10-0-1-25.ap-south-1.compute.internal") {
//$serverhostname = shell_exec("hostname -I");
//if (trim($serverhostname) != "10.0.3.39") {
//    echo "Access Denied\n";
//    die;
//} 

#include 'dbconnect.php';
//require_once 'dbconnect.php';
//require_once 'snsdbconn.php';
//require 'aws/aws-autoloader.php';
//
//use Aws\DynamoDb\DynamoDbClient;
//
//$client =DynamoDbClient::factory(array(
//    'credentials' => [
//        'key' => 'AKIASAJGPVRPNHIIJXWH',
//        'secret' => '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',
//    ],
//    'region' => 'ap-south-1'
//    //'endpoint' => 'http://localhost:8000'
//));

//$client = DynamoDbClient::factory(array(
//    'profile' => 'default',
//    'region' => 'us-west-2'  
//));
//$response = $client->listTables();
//echo 'llll';
//foreach ($response['balbharath-mediainfo'] as $key => $value) {
//       echo "$value" . PHP_EOL;
// }


// create test table    
//$client->createTable(array(
//    'TableName' => 'errors',
//    'AttributeDefinitions' => array(
//        array(
//            'AttributeName' => 'id',
//            'AttributeType' => 'N'
//        ),
//        array(
//            'AttributeName' => 'time',
//            'AttributeType' => 'N'
//        )
//    ),
//    'KeySchema' => array(
//        array(
//            'AttributeName' => 'id',
//            'KeyType'       => 'HASH'
//        ),
//        array(
//            'AttributeName' => 'time',
//            'KeyType'       => 'RANGE'
//        )
//    ),
//    'ProvisionedThroughput' => array(
//        'ReadCapacityUnits'  => 10,
//        'WriteCapacityUnits' => 20
//    )
//));
}