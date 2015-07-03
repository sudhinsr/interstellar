<?php
require 'src/facebook.php';  // Include facebook SDK file
//require 'functions.php';  // Include functions
$facebook = new Facebook(array(
  'appId'  => '1516006235285034',   // Facebook App ID 
  'secret' => '1939ab257f86b080e89de9fcabb10da5',  // Facebook App Secret
  'cookie' => true, 
));
$user = $facebook->getUser();

if ($user) {
  try {
    $user_profile = $facebook->api('/me');
        $fbid = $user_profile['id'];                 // To Get Facebook ID
      $fbuname = $user_profile['username'];  // To Get Facebook Username
      $fbfullname = $user_profile['name']; // To Get Facebook full name
      $femail = $user_profile['email'];    // To Get Facebook email ID
  /* ---- Session Variables -----*/
      $_SESSION['FBID'] = $fbid;           
      $_SESSION['USERNAME'] = $fbuname;
            $_SESSION['FULLNAME'] = $fbfullname;
      $_SESSION['EMAIL'] =  $femail;
    //       checkuser($fbid,$fbuname,$fbfullname,$femail);    // To update local DB
  } catch (FacebookApiException $e) {
    error_log($e);
   $user = null;
  }
}
if ($user) {
  header("Location: other.php");
 $message= "Hey guys, I'm Playing INTERSTELLAR . DO you wanna chase me ;)";
                                   $a = array(
                                        'access_token' => $_SESSION['access_token'],
                                              'message' => $message,
                                              'name' => 'INTERSTELLAR 2k14 ',
                                              'caption' => "http://interstellar.cecsummit.org",
                                              'link' => 'http://interstellar.cecsummit.org',
                                              'description' => 'MORE THAN A GAME...',
                                              'picture' => 'http://interstellar.foces.org/images/interstellar icon.jpg',
                                              'actions' => array(
                                                                 array(
                                                                       'name' => 'Play Now',
                                                                       'link' => 'http://interstellar.cecsummit.org'
                                                                       )
                                                                 )
                                              );
                                   $facebook->api('/me/feed/', 'post', $a);
 

} else {  


  $loginUrl = $facebook->getLoginUrl(array(
    'scope' => 'email,publish_actions'));

 header("Location: ".$loginUrl);
}
?>
