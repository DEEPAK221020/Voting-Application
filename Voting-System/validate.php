<?php

session_start();

include('db.php');


// $success = "";
// $error_message = "";


// if(!empty($_POST["submit_email"]) || )
// {
// $email = $_POST['email'];
//     }
//     else if (!empty($_SESSION['gsmail'])){
        
//         $email = $_SESSION['gsmail'];
//     } 

$email='';

// Google login api
require 'google-api/vendor/autoload.php';
  
// init configuration
$clientID = '106721554724-3u7tdb7tdj6hpp9149n04sp7rdo04tqr.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'https://recipecontest.bhooterrajadilobor.com/validate.php';
   
// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $client->setAccessToken($token['access_token']);
   
  // get profile info
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();
//   $email =  $google_account_info->email;
//   $name =  $google_account_info->name;
  
  
  $_SESSION['gsmail']=  $google_account_info['email'] ;
}
else{
    $email='';
}

// end of google login api

// !empty($_SESSION['gsmail']) ? $email = $_SESSION['gsmail'] : $email = $_POST['email'];

if(!empty($_SESSION['gsmail']))
{
    $email = $_SESSION['gsmail'] ;
    // echo "<script> console.log(".$email."); </script>";
}
else if (!empty($_POST['phone'])){
 $email = $_POST['phone'] ;
}
else{
     $email="";
}

if(!$email=='') {
$sql1="SELECT * FROM emailer WHERE email='$email'";
$result = $con->query($sql1);

if($result->num_rows > 0){
    $_SESSION['votingbtn'] = 0 ;
    // $_SESSION['alert'] = "<script> 
    // $(document).ready(function() {  
    //   toasterOptions();  
    //   toastr.warning('This Email already exists');
    // } 
    //    </script>";
    $_SESSION['alert']="<script> alert('You have already voted'); </script>";  
    // echo"<script> alert('Email already exists ') </script>";
    // header('Location:http://localhost/voting/');  
     header('Location:https://recipecontest.bhooterrajadilobor.com/');
}

else {

$sql = "INSERT INTO emailer (email) VALUES ('$email')";

if ($con->query($sql) === TRUE) {
    // echo "New record created successfully";

    $_SESSION['alert2'] = "<script> alert('Vote Wisely'); </script>";
    $_SESSION['votingbtn'] = 1 ;
    header('Location:https://recipecontest.bhooterrajadilobor.com/');
    echo"<script>window.location.href = 'https://recipecontest.bhooterrajadilobor.com/connect.php'</script>";

   } else {
        $_SESSION['votingbtn'] = 0 ;
    //  echo "Error: " . $sql . "<br>" . $con->error;
       die('Something went wrong');
       header('Location:https://recipecontest.bhooterrajadilobor.com//');
   }
}
}
else{
     $_SESSION['votingbtn'] = 0 ;
       die('Something went wrong');
    // echo "error email not found";
      header('Location:https://recipecontest.bhooterrajadilobor.com/');
    // echo $email ;
    // print_r($email);
}
?>