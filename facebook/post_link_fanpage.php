<?php
session_start();

use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\GraphUserPage;

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
        $request = new FacebookRequest(
            $long_lived_token,
            'GET',
            '/me/accounts'
        );
        
        $response = $request->execute();
        
        $grapObject = $response->getGraphObjectList(Facebook\GraphPage::className());
        
        $Geekboy_page = $grapObject[0];

        $page_id = $Geekboy_page->getId();
        $page_name = $Geekboy_page->getName();
        $page_token = $Geekboy_page->getAccessToken();
<<<<<<< HEAD
=======
        echo $page_id;
        exit;
>>>>>>> 868a3c1fe4536408461b5dd9f48b5af5fe33e136
        /* make the API call */
        
        $page_session = new FacebookSession($page_token);
        $request = new FacebookRequest(
          $page_session,
          'POST',
          '/'.$page_id.'/feed',
          array (
            'message' => 'Hello, Geekboy!',
            'scheduled_publish_time'=> '2013-01-02T04:29:33+0000',
            'published' => false,
          )
        );
        $response = $request->execute();
        $graphObject = $response->getGraphObject(Facebook\GraphPage::className());
        /* handle the result */
        echo "Posted with id: ". $graphObject->getProperty('id');
        
    } catch(FacebookRequestException $e) {
            echo "Exception occured, code: " . $e->getCode();
            echo " with message: " . $e->getMessage();

    } catch (Exception $ex) {
            echo 'Error '. $ex->getMessage();
    }    

} else { // Not logged
    echo '<h2>Not logged</h2> <br/>';
    $login_url = $helper->getLoginUrl(array('manage_pages'));
    echo "<a href='". $login_url. "'>Login with facebook</a>";
}

