<?php
/*
 * Sample code to get long lived token from facebook PHP SDK v4.
 */

    $helper = new FacebookRedirectLoginHelper('http://localhost/timchoi/index.php/login/');
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
        echo ' <pre>';
        echo 'Short-lived access token  information:';
        print_r($session);
        
        echo "Long-lived access token  information:";
        print_r($long_lived_token);
        exit;

    } else { // Not logged
        
    }