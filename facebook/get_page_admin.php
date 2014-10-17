<?php
/*
 * This demo for get list of Page that the user has Posting role.
 */
session_start();
header('Content-Type: text/html; charset=utf-8');

use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookSession;
use Facebook\FacebookRequest;

require_once 'vendor/autoload.php';

define('FB_APP_ID', '695082060564419');
define('FB_APP_SECRET', '093b0b371673a8b831dcc87d62fee7b0');

FacebookSession::setDefaultApplication(FB_APP_ID, FB_APP_SECRET);

//Create a login helper
$url_redirect = 'http://localhost/demo/facebook/get_page_admin.php'; //url to redirect when log in
$helper = new FacebookRedirectLoginHelper($url_redirect);

try {
    $session = $helper->getSessionFromRedirect();
} catch(FacebookRequestException $ex) {
    // When Facebook returns an error
} catch(\Exception $ex) {
    // When validation fails or other local issues
}

if (isset($session)) { // Login successful
    
    //*** Exchange for long-lived token
    $facebook = new FacebookSession($session->getAccessToken());
    $long_lived_token = $facebook->getLongLivedSession();

    //*** Make an api call
    try {
        $response = ( new FacebookRequest( $long_lived_token, 'GET', '/me/accounts'))->execute()->getGraphObject();  
        
        //*** Get array of Page objects
        $pages = $response->getPropertyAsArray('data');
        echo "The Page User has Post role: </br>";
        /*
         * Object page properties: 
         * View more: https://developers.facebook.com/docs/facebook-login/access-tokens#pagetokens
         */
        foreach ($pages as $item) {
            $r = $item->asArray();
            if (in_array('CREATE_CONTENT', $r['perms'])) {
                echo $r['name'] . '</br>';       
                echo $r['id'] . '</br></br>';
            }
        }
        
	} catch(FacebookRequestException $e) {

		echo "Exception occured, code: " . $e->getCode();
		echo " with message: " . $e->getMessage();
	} catch (Exception $ex) {
		echo $ex->getMessage();
	}

} else { // Not logged
    echo 'Not logged <br/>';
    $login_url = $helper->getLoginUrl(array('publish_actions'));
    echo "<a href='". $login_url. "'>Login with facebook</a>";
}

