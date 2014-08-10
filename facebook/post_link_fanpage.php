<?php
session_start();

use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookSession;
use Facebook\FacebookRequest;

require_once 'vendor/autoload.php';

define('FB_APP_ID', '695082060564419');
define('FB_APP_SECRET', '093b0b371673a8b831dcc87d62fee7b0');

FacebookSession::setDefaultApplication(FB_APP_ID, FB_APP_SECRET);

//Create a login helper
$url_redirect = 'http://localhost/demo/facebook/post_link_fanpage.php'; //url to redirect when log in
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
        $pages = (new FacebookRequest(
            $session, 'GET', '/me/accounts'
        ))->execute()->getGraphObject(\Facebook\GraphPage::className()); 
        
    } catch(FacebookRequestException $e) {

            echo "Exception occured, code: " . $e->getCode();
            echo " with message: " . $e->getMessage();

    } catch (Exception $ex) {
            echo 'Error '. $ex->getMessage();
    }    

} else { // Not logged
    echo 'Not logged <br/>';
    $login_url = $helper->getLoginUrl(array('manage_pages'));
    echo "<a href='". $login_url. "'>Login with facebook</a>";
}

