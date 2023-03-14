<?php 

// session start
session_start();

include('db.php');

$vote = $_POST['votebutton'];
$tid = $_POST['tid'];

$tvote = $vote + 1 ; 
 
$update_votes = mysqli_query($con, "update brdb_voting set Tvote='$tvote' where id='$tid'");

if($update_votes){


    $sql="SELECT * From brdb_voting";
    $result = $con->query($sql);

    $sql2="SELECT * From brdb_voting WHERE id='$tid'";
   $result2 = $con->query($sql2);

if($result->num_rows > 0 && $result2->num_rows > 0 )
{
    $groups = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // print_r($groups);
$single = mysqli_fetch_all($result2, MYSQLI_ASSOC);

$_SESSION['fetch'] = $groups ;

$_SESSION['voter'] = $single ;

// echo"<script> 
// window.location='../voting/thankyou.php';
// </script>";
  header('Location:https://recipecontest.bhooterrajadilobor.com/thankyou');
}
else{
   
    die('Something went wrong');
     header('Location:https://recipecontest.bhooterrajadilobor.com/');
}

}

?>