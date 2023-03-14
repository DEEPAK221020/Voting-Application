<?php 

// session start
session_start();

ini_set('display_errors', 1);

include('db.php');
$sql="SELECT * From brdb_voting";
    $result = $con->query($sql);
   
if($result->num_rows > 0)
{
    $groups = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // print_r($groups);
$_SESSION['fetch'] = $groups ;
$_SESSION['votingbtn'] = 0 ;

// echo "<script> window.location('https://test.ativitaa.in/'); </script>";
header('Location:https://recipecontest.bhooterrajadilobor.com/');

}
else{
    $_SESSION['votingbtn'] = 0 ;
    // echo "cannot fetch";
      die('Something went wrong');
      header('Location:https://recipecontest.bhooterrajadilobor.com/');
}
?>