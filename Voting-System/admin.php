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
 <!-- Preloader -->
  <!--<div class="preloader"></div> -->
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
    
   include('db.php');
$sql="SELECT * From brdb_voting";
    $result = $con->query($sql);
   
if($result->num_rows > 0)
{
      $res = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //  $res = $_SESSION['fetch'];
      // print_r($res);
      for( $i=0 ; $i<count($res); $i++){
        $j = $i + 1 ;
        echo"
        <hr></hr>
        <div class='col-12 mt-3  '>
        <div class='row'>
  <div  class='content-image col'> <span class='c-id'> ".$j.". </span> <span class='c-name' > ".$res[$i]['myname']." - <span class='phone-t' id='phone-t' >".str_replace(range(0,9), "*", substr($res[$i]['phone'], 0, -4)).substr($res[$i]['phone'], -4)."</span> </span> </div>
  </div>
  </div>
  <div class='more content-recep col-12 mt-3 '> <h5> Recipe :- </h5> ".$res[$i]['receipe']."</div>
  <div class='col-12  d-flex justify-content-end mb-3' ><b> Total Vote:- 
  ".$res[$i]['Tvote']." </b> </div> ";
  // <div>".$res[$i]['Tvote']."</div>  
      }
}
      else{
            echo "cannot fetch";
      }
    ?>
    
</div>
  </div>
  </div>
  </div>

<?php
// Footer.php
include('footer.php'); 
?>
