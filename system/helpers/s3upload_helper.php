<?php

require 'aws/aws-autoloader.php';

use Aws\S3\S3Client;
use Aws\Exception\AwsException;
use Aws\S3\Exception\S3Exception;

function s3upload($source, $dest, $remarks = "", $type = "html") {

    if (strlen(trim($source)) <= 0) {
        return false;
    }
    if (strlen(trim($dest)) <= 0) {
        return false;
    }

    $logfl = "/mc/webprojects/s3upload_logs/log-" . date("Ymd") . ".txt";
    $fp = fopen($logfl, "a");

    $result = false;
    $logdata = date("Y-m-d H:i:s");
    $logdata .= "\t" . $source;
    $logdata .= "\t" . $dest;

    try {
        $s3Client = new S3Client([
            'region' => 'ap-south-1',
            'version' => 'latest',
            'credentials' => [
                'key' => 'AKIAJ2732EHJBO4V7M3Q',
                'secret' => '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'
            ]
        ]);

#            echo $s3Client;
#            echo $source;
#            echo $dest;
//        $x = explode("/", $source);
//        $key = array_map('basename', $x);
//        $name = $key[1];
//        $file_Path = "$name";
        if ($type == "html") {
            $source = '/mc/webprojects/' . $source;
            $result = $s3Client->putObject([
                'Bucket' => 'mahilabharat-gallery',
                'Key' => $dest,
                'ACL' => 'public-read-write',
                'SourceFile' => $source,
                'ContentType' => $ctype
            ]);
        } else {
            $source = '/mc/webprojects/' . $source;
            $result = $s3Client->putObject([
                'Bucket' => 'mahilabharat-gallery',
                'Key' => $dest,
                'ACL' => 'public-read-write',
                'SourceFile' => $source,
                'CacheControl' => 'public, max-age=604800'
            ]);
        }

        #           echo $result;
        if (!function_exists("CDNPurge")) {
            @include_once 'cdnpurge_helper.php';
        }
        $s3url = "/" . $dest;
        CDNPurge("s3", $s3url);

        $s3Client = NULL;
        $logdata .= "\tSuccess";
        $result = true;
    } catch (S3Exception $s3e) {
        $s3Client = NULL;
        $logdata .= "\tFailed";
        $logdata .= "\t" . $s3e->getMessage();
        //echo $e->getMessage();
    } catch (AwsException $awse) {
        $s3Client = NULL;
        $logdata .= "\tFailed";
        $logdata .= "\t" . $awse->getMessage();
        //echo $e->getMessage();
    } catch (Exception $e) {
        $s3Client = NULL;
        $logdata .= "\tFailed";
        $logdata .= "\t" . $e->getMessage();
        //echo $e->getMessage();
    }
    $logdata .= "\t" . $remarks;
    $logdata .= "\n";
    fwrite($fp, $logdata);
    fclose($fp);
    return $result;
}

//var params = {
//  Bucket: 'STRING_VALUE', /* required */
//  Key: 'STRING_VALUE', /* required */
//  ACL: private | public-read | public-read-write | authenticated-read | aws-exec-read | bucket-owner-read | bucket-owner-full-control,
//  Body: Buffer.from('...') || 'STRING_VALUE' || streamObject,
//  CacheControl: 'STRING_VALUE',
//  ContentDisposition: 'STRING_VALUE',
//  ContentEncoding: 'STRING_VALUE',
//  ContentLanguage: 'STRING_VALUE',
//  ContentLength: 'NUMBER_VALUE',
//  ContentMD5: 'STRING_VALUE',
//  ContentType: 'STRING_VALUE',
//  Expires: new Date || 'Wed Dec 31 1969 16:00:00 GMT-0800 (PST)' || 123456789,
//  GrantFullControl: 'STRING_VALUE',
//  GrantRead: 'STRING_VALUE',
//  GrantReadACP: 'STRING_VALUE',
//  GrantWriteACP: 'STRING_VALUE',
//  Metadata: {
//    '<MetadataKey>': 'STRING_VALUE',
//    /* '<MetadataKey>': ... */
//  },
//  ObjectLockLegalHoldStatus: ON | OFF,
//  ObjectLockMode: GOVERNANCE | COMPLIANCE,
//  ObjectLockRetainUntilDate: new Date || 'Wed Dec 31 1969 16:00:00 GMT-0800 (PST)' || 123456789,
//  RequestPayer: requester,
//  SSECustomerAlgorithm: 'STRING_VALUE',
//  SSECustomerKey: Buffer.from('...') || 'STRING_VALUE' /* Strings will be Base-64 encoded on your behalf */,
//  SSECustomerKeyMD5: 'STRING_VALUE',
//  SSEKMSEncryptionContext: 'STRING_VALUE',
//  SSEKMSKeyId: 'STRING_VALUE',
//  ServerSideEncryption: AES256 | aws:kms,
//  StorageClass: STANDARD | REDUCED_REDUNDANCY | STANDARD_IA | ONEZONE_IA | INTELLIGENT_TIERING | GLACIER | DEEP_ARCHIVE,
//  Tagging: 'STRING_VALUE',
//  WebsiteRedirectLocation: 'STRING_VALUE'
//};