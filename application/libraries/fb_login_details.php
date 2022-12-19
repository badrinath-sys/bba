<?php

ob_start();
require('ci_index.php');
ob_end_clean();
$CI = & get_instance();
$CI->load->library('session'); //if it's not autoloaded in your CI setup
$this->load->helper(array('cookie', 'url'));

//print_r($_COOKIE);
//echo session_id();
//exit;
require_once APPPATH . "libraries/Facebook/autoload.php";
require_once APPPATH . "libraries/fb_url_detection_handler.php";


$fb = new Facebook\Facebook([
    'app_id' => '616874248922483', // Replace {app-id} with your app id
    'app_secret' => 'a27156312dabbd85ad5e4e38f2d830d9',
    'default_graph_version' => 'v3.2',
    'url_detection_handler' => new MyUrlDetectionHandler(),
        ]);

$helper = $fb->getRedirectLoginHelper();
if (isset($_GET['state'])) {
    $helper->getPersistentDataHandler()->set('state', $_GET['state']);
}

try {
    $accessToken = $helper->getAccessToken();
} catch (Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
    echo '<pre>';
    print_r($e);
    echo '</pre>';
    exit;
} catch (Facebook\Exceptions\FacebookSDKException $e) {
    // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}

if (!isset($accessToken)) {
    if ($helper->getError()) {
        header('HTTP/1.0 401 Unauthorized');
        echo "Error: " . $helper->getError() . "\n";
        echo "Error Code: " . $helper->getErrorCode() . "\n";
        echo "Error Reason: " . $helper->getErrorReason() . "\n";
        echo "Error Description: " . $helper->getErrorDescription() . "\n";
    } else {
        header('HTTP/1.0 400 Bad Request');
        echo 'Bad request';
    }
    exit;
}

// Logged in
//echo '<h3>Access Token</h3>';
//var_dump($accessToken->getValue());
// The OAuth 2.0 client handler helps us manage access tokens
$oAuth2Client = $fb->getOAuth2Client();

// Get the access token metadata from /debug_token
$tokenMetadata = $oAuth2Client->debugToken($accessToken);
//echo '<h3>Metadata</h3>';
//var_dump($tokenMetadata);
//// Validation (these will throw FacebookSDKException's when they fail)
//$tokenMetadata->validateAppId('2296212830610113'); // Replace {app-id} with your app id
//// If you know the user ID this access token belongs to, you can validate it here
////$tokenMetadata->validateUserId('123');
//$tokenMetadata->validateExpiration();

if (!$accessToken->isLongLived()) {
    // Exchanges a short-lived access token for a long-lived one
    try {
        $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
    } catch (Facebook\Exceptions\FacebookSDKException $e) {
        echo "<p>Error getting long-lived access token: " . $e->getMessage() . "</p>\n\n";
        exit;
    }

//    echo '<h3>Long-lived</h3>';
//    var_dump($accessToken->getValue());
}

$_SESSION['fb_access_token'] = (string) $accessToken;

//echo '<pre>';
//print_r($_SESSION);
//echo '</pre>';

if (isset($accessToken) && $accessToken != "") {

    try {
        // Get the \Facebook\GraphNodes\GraphUser object for the current user.
        // If you provided a 'default_access_token', the '{access-token}' is optional.
//        $response = $fb->get('/me?fields=id,first_name,last_name,email,link,gender,locale,cover,picture', $accessToken);
        $response = $fb->get('/me?fields=id,first_name,last_name,email,picture', $accessToken);
    } catch (\Facebook\Exceptions\FacebookResponseException $e) {
        // When Graph returns an error
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
    } catch (\Facebook\Exceptions\FacebookSDKException $e) {
        // When validation fails or other local issues
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }

    $me = $response->getGraphUser();


   echo '<pre>';
   print_r($me);

   echo '</pre>';
   exit;
//    echo 'Logged in as ' . $me->getName();
    $graphObject = $response->getGraphObject();
    $fbid = $graphObject->getProperty('id');
//    echo '<br>';
    $fbfirstname = $graphObject->getProperty('first_name');
//    echo '<br>';
    $fblastname = $graphObject->getProperty('last_name');
//    echo '<br>';
    $fbemail = $graphObject->getProperty('email');
//    echo '<br>';
    //$fbpicture = $graphObject->getProperty('picture','items');
    $profile = "https://graph.facebook.com/$fbid/picture";
    $fbfullname = $fbfirstname . ' ' . $fblastname;



}
//// User is logged in with a long-lived access token.
//// You can redirect them to a members-only page.
//header('Location: https://www.etvbalbharat.com/');
