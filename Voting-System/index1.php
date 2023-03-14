<?php 

// session start 
session_start();

ini_set('display_errors', 1);

// Header.php
include('header.php');
?>

<div class="container">
    <table class="table mt-5 ">
        <thead>
            <tr class="row-cols-xs-2" >
                <th scope="col" class="col  col-xs-6">image</th>
                <th scope="col" class="col-2 col-xs-6">name</th>
                <th scope="col" class="col-7 col-xs-12">Recipe</th>
                <th scope="col" class="col col-xs-6">vote</th>
                <th scope="col" class="col col-xs-6">T-vote</th>
            </tr>
        </thead>
        <tbody>
            
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
      for($i=0 ; $i<count($res); $i++){
        echo"<tr>
  <th class='content-image'> <img src='./image/".$res[$i]["photo"]."'></th>
  <td scope='row'>".$res[$i]['myname']."</td>
  <td class='more content-recep '>".$res[$i]['receipe']."</td>
  <td><form action='vote.php' method='POST' onsubmit='return myfn()'>
  <input type='hidden' name='tid' value=".$res[$i]['id']."  >
  <input type='hidden' name='votebutton' value=".$res[$i]['Tvote']."> 
  " ?>

    <?php
            

   if($_SESSION['votingbtn']==0){
      ?>
   <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop" disabled > Vote </button>
            
            <?php
                  }
          else{
             ?>
    <button class='btn btn-success' type='submit' disabled>vote</button>
    <?php
       }
      ?>
<!-- <button class='btn btn-danger' type='submit'>vote</button> -->

            <?php echo "
  </form> </td>
  <td>".$res[$i]['Tvote']."</td>
</tr>";
      }
    }
    else{
      // echo "<h1> failed to fetch </h1>";
      header('Location:http://test.ativitaa.in/connect.php');
    }

    ?>

  </tbody>
  </table>

  <!-- Pop Up Login -->
<!-- Modal -->
<div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Enter Your Email To Vote</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        <form action="validate.php" method="POST" name='myfm' onsubmit="return sub()" >
        <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" name='email'  id="exampleFormControlInput1" placeholder="Enter your Email" required>
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
$redirectUri = 'https://test.ativitaa.in/validate.php';
   
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
              var d = document.forms['myfm']['email'].value;

              if(d==='')
              {
                return false;
                this.preventdefault();
              }
              else{
                return true ;
              }
            }

            </script>


            <?php
// Footer.php
include('footer.php'); 
?>