<?php

session_start();

use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookSession;
use Facebook\FacebookRequest;

require_once 'vendor/autoload.php';

if (isset($_POST['submit'])) {
    
    $date = new DateTime($_POST['time'], new DateTimeZone('Asia/Bangkok'));
    $arr = array(
        'datetime' => $date->getTimestamp(),
        'message' => $_POST['message'],
        'image' => $_FILES['image']['tmp_name'],
    );
    upload_image($arr);
    return true;
}

include 'layout.php';


function upload_image($arr = array()) {
    

    define('FB_APP_ID', '695082060564419');
    define('FB_APP_SECRET', '093b0b371673a8b831dcc87d62fee7b0');

    FacebookSession::setDefaultApplication(FB_APP_ID, FB_APP_SECRET);

    //Create a login helper
    $url_redirect = 'http://localhost/demo/facebook/post_image.php'; //url to redirect when log in
    $helper = new FacebookRedirectLoginHelper($url_redirect);

    try {
        $page_session = new FacebookSession('CAAJ4LGdPR8MBAHDVTTZBs7pEmPSukvJnecEnv2My8N5ajccWwAGCBE437IsqSXoFTEpXNYgafHKc38TSBRZCJZALTOIo2CQ3YQ4gdgWR2AgtPrt84tpfdBYVi6ZCO07mEZCkCNTQbEGI2Mx34EhzEhKoBHWlW1aG0IwUKKCzebZCP3abSV15JZB');
    } catch(FacebookRequestException $ex) {
        // When Facebook returns an error
        
    } catch(\Exception $ex) {
        // When validation fails or other local issues
    }
    if (isset($page_session)) { // Login successful
        //*** Make an api call
        //*** https://developers.facebook.com/docs/graph-api/reference/v2.1/page/photos/
        try {
            $page_id = '121809317986153';
            
            $request = new FacebookRequest(
                $page_session,
                'POST',
                '/'.$page_id.'/photos',
                array (
<<<<<<< HEAD
                    //'url'      => 'http://k14.vcmedia.vn/thumb_w/600/TUcCKsDLlXNsjUG7RZV5C4G4GPDR4i/Image/2012/12/thu-gui-noi-buon-6-f96ea.jpg',
                    'message' => $arr['message'],
                    'published' => false,
                    'scheduled_publish_time' => $arr['datetime'],
                    'source' => new CURLFile('C:\Users\user22\Downloads\Geekboy_old.jpg', 'image/png'),
=======
                    'url'      => 'http://k14.vcmedia.vn/thumb_w/600/TUcCKsDLlXNsjUG7RZV5C4G4GPDR4i/Image/2012/12/thu-gui-noi-buon-6-f96ea.jpg',
                    'message' => $arr['message'],
                    'published' => false,
                    'scheduled_publish_time' => $arr['datetime'],
                    //'source' => new CURLFile(realpath('/home/echpay/Downloads/avatar.jpg'), 'image/png'),
>>>>>>> origin/master
                )
            );
               
            $response = $request->execute(); 
            echo "Post successfully";

            } catch(FacebookRequestException $e) {

                    echo "Exception occured, code: " . $e->getCode();
                    echo " with message: " . $e->getMessage();

            } catch (Exception $ex) {
                    echo $ex->getMessage();
                    echo "<pre>";
                    print_r($ex->getTraceAsString());
            }

    } else { // Not logged
        echo 'Not logged <br/>';
        $login_url = $helper->getLoginUrl(array('publish_actions'));
        echo "<a href='". $login_url. "'>Login with facebook</a>";
    }
}