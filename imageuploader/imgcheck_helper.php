<?php

require 'aws/aws-autoloader.php';

use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;

#runkit_function_redefine('file_exists', '$file', 'return fileExists($file);');

function fileExists($file) {
    try {
        $s3Client = new S3Client([
            'region' => 'ap-south-1',
            'version' => 'latest',
            'credentials' => [
                'key' => 'AKIAJ2732EHJBO4V7M3Q',
                'secret' => '1gFfW2ykfkvtO1e2N+gGlKwjHpGyfJap0X3wao83'
            ]
        ]);

        $fl = str_replace("https://mahilabharat-gallery.s3.ap-south-1.amazonaws.com/", '', $file);
        //$fl = str_replace("https://betagallery.eenadu.net/", '', $fl);

        $result = $s3Client->doesObjectExist("mahilabharat-gallery", $fl);
        $s3Client = NULL;
        #$result = $s3Client->doesObjectExist("eenet-gallery", $fl);
        #print_r($result);
    } catch (S3Exception $e) {
        $s3Client = NULL;
        #echo $e->getMessage() . "\n";
        gc_collect_cycles();
        return 0;
    }
    gc_collect_cycles();
    return (int) $result;
}
