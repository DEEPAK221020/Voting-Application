<?php 

// session start 
session_start();

// ini_set('display_errors', 1);

// Header.php
include('header.php');
?>

<style>

body{
    background-image: url("./image/background/Desktop.jpg");
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
}

.c-name{
  font-size:20px;
  font-weight:bold;
  /*padding-left:10px;*/
}
.c-id{
  font-size:20px;
  font-weight:bold;
  padding-right:5px;
}

  @media only screen and (max-width: 600px){
.sec-h1{
width:80% ;
}
.c-name{
  font-size:18px;
  font-weight:bold;
  /*padding-left:10px;*/
}
.c-id{
  font-size:18px;
  font-weight:bold;
  padding-right:5px;
}
body{
    background-image: url("./image/background/mobile.jpg");
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
}
}

</style>

<div class="container">
    <!-- <table class="table mt-5 "> -->
      <div class='row d-flex  justify-content-center align-items-center '>
        <div class="col-6 sec-h1">
          <div class="row">
<h1 class="mt-5 mb-3" ><center>Contestants</center></h1>
         
        <!-- <thead> -->
            <!-- <tr class="row-cols-xs-2" >
                <th scope="col" class="col  col-xs-6">image</th>
                <th scope="col" class="col-2 col-xs-6">name</th>
                <tr>
                <th scope="col" class="col-7 col-xs-12">Recipe</th>
</tr>
<tr>
                <th scope="col" class="col col-xs-6">vote</th>
                <th scope="col" class="col col-xs-6">T-vote</th>
</tr>
              </tr> -->
              <!-- <tr >
                <th scope="col" >image</th>
                <th scope="col" >name</th>
                <tr>
                <th scope="col" >Recipe</th>
</tr>
<tr>
                <th scope="col" >vote</th>
                <th scope="col" >T-vote</th>
</tr>
              </tr> -->
        <!-- </thead> -->
        <!-- <tbody> -->
            
            <?php 
    
    // For already exists emails
    if($_SESSION['votingbtn']==0)
    {
    // echo "<script> $(document).ready(function() {toastr.warning('This Email already exists');} </script>" ;
    // echo "<script> alert('This email is already exists'); </script>";
    echo $_SESSION['alert'];
    $_SESSION['alert']="";
    }
    else{

    // For New Emails
    echo $_SESSION['alert2'];
    }


    if(isset($_SESSION['fetch']))
    {
      $res = $_SESSION['fetch'];
      // print_r($res);
      for( $i=0 ; $i<count($res); $i++){
        $j = $i + 1 ;
        
    //     function getTruncatedCCNumber($ccNum){
    //     return str_replace(range(0,9), "*", substr($ccNum, 0, -4)) .  substr($ccNum, -4);
    // }
        
        echo"
        <hr></hr>
        <div class='col-12 mt-3  '>
        <div class='row'>
  <div  class='content-image col'><span class='c-id'> ".$j.".  </span><span class='c-name' >".$res[$i]['myname']." - <span class='phone-t' id='phone-t' >".str_replace(range(0,9), "*", substr($res[$i]['phone'], 0, -4)).substr($res[$i]['phone'], -4)."</span> </span> </div>
  </div>
  </div>
  <div class='more content-recep col-12 mt-3 '> <h5> Recipe :- </h5> ".$res[$i]['receipe']."</div>
  <div class='col-12  d-flex justify-content-end mb-3' ><form action='vote.php' method='POST' onsubmit='return myfn()'>
  <input type='hidden' name='tid' value=".$res[$i]['id']."  >
  <input type='hidden' name='votebutton' value=".$res[$i]['Tvote']."> 
  " ;?>

    <?php
            

   if($_SESSION['votingbtn']==0){
      ?>
   <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> Vote </button>
            
            <?php
                  }
          else{
             ?>
    <button class='btn btn-success' type='submit'>vote</button>
    <?php
       }
      ?>
   <?php echo "
  </form> </div>
  ";
  // <div>".$res[$i]['Tvote']."</div>  
      }
    }
    
    //  &nbsp
    
    else{
      // echo "<h1> failed to fetch </h1>";
       header('Location:https://recipecontest.bhooterrajadilobor.com/connect.php');
    //   header('Location:http://localhost/brdbvotingsystem/connect.php');
    echo"<script>window.location.href = 'https://recipecontest.bhooterrajadilobor.com/connect.php'</script>";
    }

    ?>

</div>
        </div>
  </div>

  <!-- Pop Up Login -->
<!-- Modal -->
<div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Enter Your Phone Number To Vote</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        <form action="validate.php" method="POST" name='myfm' onsubmit="return sub()" >
        <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Phone No.</label>
  <input type="tel" class="form-control" name='phone'  id="exampleFormControlInput1" placeholder="Enter your phone No." minlength="10" maxlength="10" required>
</div>
<input type="submit" class="btn btn-primary" name="submit_email" value="Submit" >
</form>
<div class="mb-4" ><center> or </center></div>
<!--<div class="g-signin2" data-onsuccess="onSignIn"></div> -->

 <?php 

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
  
// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $client->setAccessToken($token['access_token']);
   
  // get profile info
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();

  $_SESSION['gsmail']=  $google_account_info['email'] ;
  

} else {
  echo " <center> <a href='".$client->createAuthUrl()."' class='login-with-google-btn ' > Sign in with Google To Vote</a> </center> ";
}
?>
<div class="gs-2" ></div>

      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div> -->
    </div>
  </div>
</div>

  </div>


            <script type="text/javascript">
            function myfn() {

                // var b = localStorage.getItem('voterID');

                if (window.confirm('Are you sure ')) {
                    return true;
                } else {
                    return false;
                }
            }
            
// Modem Form Validation
            function sub(){
              var d = document.forms['myfm']['phone'].value;

              if(d==='')
              {
                return false;
                this.preventdefault();
              }
              else{
                return true ;
              }
            }
            
            
//             var str = document.querySelectorAll('.phone-t');
            
//             for(var i=0; i<str.length ; i++)
//             {
//             // str[i] = str[i].replace(/.(?=.{4})/g, 'x');
//             var trailingCharsIntactCount = 4;

// str[i] = new Array(str[i].length - trailingCharsIntactCount + 1).join('x')
//       + str[i].slice(-trailingCharsIntactCount);
// str[i].innerHtml=str[i];
//             }
            
            

            </script>


            <?php
// Footer.php
include('footer.php'); 
?>