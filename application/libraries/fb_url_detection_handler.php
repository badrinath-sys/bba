<?php

require 'Facebook/autoload.php';

use Facebook\Url\UrlDetectionInterface;

class MyUrlDetectionHandler implements UrlDetectionInterface {

    /**
     * @inheritdoc
     */
    public function getCurrentUrl() {

        $base_url = 'https';
        $base_url .= "://" . @$_SERVER['HTTP_HOST'];
        $base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);

        return $base_url . "fb_login/fb_login_details";
    }

}
