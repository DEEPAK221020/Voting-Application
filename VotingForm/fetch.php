<?php  

include('db.php');

$sql = "SELECT id, myname , phone , email , receipe FROM brdb";
$result = $con->query($sql);


?>